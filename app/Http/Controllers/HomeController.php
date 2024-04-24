<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Env\Response;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Service;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{

    public function details_room($id){
        $room = Room::find($id);
        $service = Service::all();
        return view('home.details_room' , compact('room', 'service'));
    
    }

    public function add_booking(Request $request , $id){
        $request->validate([
            'startDate' => 'required|date',
            'endDate'=>'required|date|after:startDate',
        ]);

        if(auth()->check()) {
           
        } else {
            return redirect()->route('register');
            
        }
        $serviceId = Service::findMany($id);
        $data = new Booking;
    
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        $startDate = $request->startDate;
        $endDate = $request->endDate;
                // Convert start and end dates to Carbon instances
        $start = \Carbon\Carbon::parse($startDate);
        $end = \Carbon\Carbon::parse($endDate);

        // Calculate the number of days between start and end dates
        $numberOfNights = $start->diffInDays($end) - 1;

        if ($numberOfNights == 0) {
            $numberOfNights = 1;
        }
    
         // Retrieve and process multiple service IDs
        $serviceIds = $request->input('service_id', []);

        // Convert array of IDs to comma-separated string if needed
        $data->service_id = implode(',', $serviceIds);

        $data->adult_per_room = $request->adult_per_room;
        $data->child_per_room = $request->child_per_room;

        $roomPrice = Room::where('id' ,$id)->value('price');

        // Retrieve all service prices for the given IDs in a single query
        $servicePrices = Service::whereIn('id', $serviceIds)->pluck('price', 'id');

        // Initialize total service price
        $serviceTotalPrice = 0;

        // Calculate total service price by summing up individual service prices
        foreach ($serviceIds as $id) {
            // Check if the service price exists in the $servicePrices collection
            if (isset($servicePrices[$id])) {
                $serviceTotalPrice += $servicePrices[$id];
            }
        }

        $totalPrice = ($roomPrice + $serviceTotalPrice) * $numberOfNights ;
        $data->price = $totalPrice;

        $isBooked = Booking::where('room_id' , $id)
            ->where('start_date', '<=' , $endDate)
            ->where('end_date' , '>=' , $startDate)->exists();
    
        if($isBooked){
            return redirect()->back()->with('message' , 'Room is already booked please try different date');
        }else{
            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;
        }
        if(auth()->check()) {
            $data->save();
            return redirect()->back()->with('message' , 'Room Booker Successfully');
        } else {
            // User is not logged in, handle the case accordingly
            $request->session()->put('booking_data', $request->all());
            // Redirect to the registration page
            return redirect()->route('register');
            
        }
          
       
    }
    
    public function contact(Request $request){
        $request->validate([
            'phone' => ['required', 'regex:/^(0)\d{9}$/'],
        ], [
            'phone.regex' => 'The phone number must start with 0 and have 10 characters.'
        ]);
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email= $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

       
        $contact->save();
        return redirect()->back()->with('message' , 'Message Send Successfully');
    }
    
    public function our_rooms(){
        $room = Room::all();
     
        return view('home.our_rooms' , compact('room'));
    }

    public function hotel_gallery(){
       $gallery = Gallery::all();
       return view('home.hotel_gallery' , compact('gallery'));
    }

    public function about_us(){
        return view('home.about');
     }

    public function contact_us(){
        return view('home.contact_us');
     }


    public function booked_room(){
        if(auth()->check()) {
            $user = auth()->user();
            $data = Booking::where('phone', $user->phone)->get();
            return view('home.booked_room', compact('data'));
        } else {
            // User is not logged in, handle the case accordingly
            return redirect()->route('login');
        }
    }



    public function cancel_booking($id){
        $rooms = Booking::find($id);
        if($rooms->status == 'waiting'){
            $rooms->delete();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function checkout(Request $request, $id){
        // Retrieve the currently authenticated user
        $user = $request->user();
    
        // Retrieve the booking based on the provided booking ID and user's phone number
        $booking = Booking::where('id', $id)
                          ->where('phone', $user->phone)
                          ->first();
    
        // Check if the booking exists
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found or does not belong to the user.');
        }
    
        // Create a checkout session for the specific booking
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Name:' . $booking->name, // Change this to whatever makes sense for your product data
                    ],
                    'unit_amount' => $booking->price * 100, // Convert price to cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true)."?session_id={CHECKOUT_SESSION_ID}", // Update with your actual success URL
            'cancel_url' => route('checkout.cancel', [], true), // Update with your actual cancel URL
        ]);
    
        // Save the session ID to the booking
        $booking->session_id = $checkout_session->id;
        $booking->save();
    
        // Redirect the user to the checkout session URL of the specific booking
        return redirect($checkout_session->url);
    }
    

    public function success(Request $request){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
    
        // Retrieve the session ID from the request
        $sessionId = $request->query('session_id');
    
        try {
            // Retrieve the session from Stripe using the provided session ID
            $session = $stripe->checkout->sessions->retrieve($sessionId);
    
            // If session is not found, throw an exception
            if (!$session) {
                throw new NotFoundHttpException();
            }
            
            $booking = Booking::where('session_id', $session->id)->where('status', 'waiting')->first();
            if(!$booking){
                throw new NotFoundHttpException();
            }
            $booking->status = 'approve';
            $booking->save();
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
        
        return view('home.checkout-success');
    }
    

    public function cancel()
    {
        // Handle cancelled checkout
        return view('home.checkout-cancel');
    }
}
