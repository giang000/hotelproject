<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Service;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $user = auth()->user();
                $room = Room::all();
                $gallery = Gallery::all();

                return view('home.index', compact('room' , 'gallery'));
            }else if ($usertype == 'admin')
            {
        
                $totalRooms = Room::count();
                return view('admin.index', compact('totalRooms'));
            }else
            {
                return redirect()-> back();
            }
        }

    }
    public function home(){
        $room = Room::all();
        $gallery = Gallery::all();
        return view('home.index' , compact('room' , 'gallery')); 
    }

    public function create_room(){
        return view('admin.create_room');
    }

    public function add_room(Request $request){
        $data = new Room;
        $data -> room_title = $request->title;
        $data -> description = $request->description;
        $data -> price = $request->price;
        $data -> room_type = $request->type;
        $data -> wifi = $request->wifi;
        $data -> area = $request->area;
        $data -> facilities = $request->facilities;
        $data -> bed_bath = $request->bed_bath;
     

        $image = $request -> image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room' , $imagename);
            $data->image=$imagename;
        }

        $data -> save();
        
        return redirect() -> back(); 
    }
    public function view_room(){
        $data = Room::all();
        return view('admin.view_room' , compact('data'));
    }
    public function delete_room($id){

        $data = Room::find($id);
        $data->delete();
        return redirect()->back();
    }
    public  function update_room($id){
        $data = Room::find($id);
        return view('admin.update_room' , compact('data'));
    }
    
    public function edit_room(Request $request, $id){
       $data = Room::find($id);

       $data->room_title = $request->title;

       $data->description = $request->description;

       $data->price = $request->price;

       $data->room_type = $request->type;

       $data->wifi = $request->wifi;

       $data->area = $request->area;

       $data->facilities = $request->facilities;

       $data->bed_bath = $request->bed_bath;

       
       $image = $request -> image;
       if($image){
           $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('room' , $imagename);
           $data->image=$imagename;
       }
       $data->save();

    //    return redirect()->back()->with('success', 'Room updated successfully');
       return redirect('/view_room')->with('success', 'Room updated successfully');;
    }

    public function bookings(){
        $data = Booking::all();
        return view('admin.booking' , compact('data'));
    }
    public function delete_booking($id){
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function approve_book($id){

        $booking = Booking::find($id); 
        $booking->status = 'approve';
        $booking->save();
        return redirect()->back();
    }

    public function rejected_book($id){
        $booking = Booking::find($id);
        $booking->status = 'rejected';
        $booking->save();
        return redirect()->back();
    }

    public function view_gallery(){
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }

    public function upload_gallery(Request $request){
        // Validate the incoming request data, including the images
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
        ]);

        // Check if any files were uploaded
        if ($request->hasFile('image')) {
            // Loop through each uploaded image
            foreach ($request->file('image') as $image) {
                // Generate a unique filename for each image
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Move the uploaded image to the specified directory
                $image->move(public_path('gallery'), $imageName);

                // Create a new Gallery model instance for each image
                $gallery = new Gallery;
                $gallery->image = $imageName;
                $gallery->save();
            }
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Images uploaded successfully.');
    }



    public function delete_gallery($id){
        $data = Gallery::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function all_message(){
        $data = Contact::all();
        return view('admin.all_message' , compact('data'));
    }

    public function send_email($id){
        $data = Contact::find($id);
        return view('admin.send_email' , compact('data'));
    }

    public function delete_email($id)
    {
        $data = Contact::find($id);

        if (!$data) {
            return back()->with('error', 'Email not found.');
        }

        $data->delete();

        return redirect()->back();
    }

    public function mail(Request $request , $id){
        $data = Contact::find($id);

        $details = [
             'greeting' => $request->greeting,
             'body' => $request->body,
             'action_text' => $request->action_text,
             'action_url' => $request->action_url,
             'endline' => $request->endline,
        ];
        Notification::send($data , new SendEmailNotification($details));
        return redirect()->back();
    }

    public function create_service(){
        return view('admin.create_service');
    }

    public function add_service(Request $request){
        $data = new Service;
        $data -> name = $request->name;
        $data -> description = $request->description;
        $data -> price = $request->price;
     
        $data -> save();
        
        return redirect() -> back(); 
    }

    public function view_service(){
        $data = Service::all();
        return view('admin.view_service' , compact('data'));
    }

    public  function update_service($id){
        $data = Service::find($id);
        return view('admin.update_service' , compact('data'));
    }
    
    public function edit_service(Request $request, $id){
       $data = Service::find($id);

       $data->name = $request->name;

       $data->description = $request->description;

       $data->price = $request->price;

       $data->save();

    //    return redirect()->back()->with('success', 'Room updated successfully');
       return redirect('/view_service');
    }

    public function delete_service($id){

        $data = Service::find($id);
        $data->delete();
        return redirect()->back();
    }
}
