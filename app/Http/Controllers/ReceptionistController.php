<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallary;
use App\Models\Contact;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class ReceptionistController extends Controller
{
    

    
    public function home(){
        $room = Room::all();
        $gallary = Gallary::all();
        return view('home.index' , compact('room' , 'gallary')); 
    }

    public function create_room(){
        return view('receptionist.create_room');
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
        return view('receptionist.view_room' , compact('data'));
    }
    public function delete_room($id){

        $data = Room::find($id);
        $data->delete();
        return redirect()->back();

    }
    public  function update_room($id){
        $data = Room::find($id);
        return view('receptionist.update_room' , compact('data'));
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
        return view('receptionist.booking' , compact('data'));
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

    public function view_gallary(){
        $gallary = Gallary::all();
        return view('receptionist.gallary', compact('gallary'));
    }

    public  function upload_gallary(Request $request){
        $data = new Gallary;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('gallary' , $imagename);
            $data->image=$imagename;
            $data->save();
            return redirect()->back();
        }
    }

    public function delete_gallary($id){
        $data = Gallary::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function all_message(){
        $data = Contact::all();
        return view('receptionist.all_message' , compact('data'));
    }

    public function send_email($id){
        $data = Contact::find($id);
        return view('receptionist.send_email' , compact('data'));
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



}
