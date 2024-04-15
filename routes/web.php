<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [AdminController::class , 'home']);

Route::get('/home' , [AdminController::class , 'index'])->name('home')->middleware(['auth' , 'admin']);

Route::get('/create_room' , [AdminController::class , 'create_room'])->middleware(['auth' , 'admin']);

Route::post('/add_room' , [AdminController::class , 'add_room'])->middleware(['auth' , 'admin']);

Route::get('/view_room' , [AdminController::class , 'view_room'])->middleware(['auth' , 'admin']);

Route::get('/delete_room/{id}' , [AdminController::class , 'delete_room'])->middleware(['auth' , 'admin']);

Route::get('/update_room/{id}' , [AdminController::class , 'update_room'])->middleware(['auth' , 'admin']);

Route::post('/edit_room/{id}' , [AdminController::class , 'edit_room'])->middleware(['auth' , 'admin']);

Route::get('/bookings' , [AdminController::class , 'bookings'])->middleware(['auth' , 'admin']);

Route::get('/delete_booking/{id}' , [AdminController::class , 'delete_booking'])->middleware(['auth' , 'admin']);

Route::get('/approve_book/{id}' , [AdminController::class , 'approve_book'])->middleware(['auth' , 'admin']);

Route::get('/rejected_book/{id}' , [AdminController::class , 'rejected_book'])->middleware(['auth' , 'admin']);

Route::get('/view_gallery' , [AdminController::class , 'view_gallery'])->middleware(['auth' , 'admin']);

Route::post('/upload_gallery' , [AdminController::class , 'upload_gallery'])->middleware(['auth' , 'admin']);

Route::get('/delete_gallery/{id}' , [AdminController::class , 'delete_gallery'])->middleware(['auth' , 'admin']);

Route::get('/all_message' , [AdminController::class , 'all_message'])->middleware(['auth' , 'admin']);

Route::get('/send_email/{id}' , [AdminController::class , 'send_email'])->middleware(['auth' , 'admin']);

Route::get('/delete_email/{id}' , [AdminController::class , 'delete_email'])->middleware(['auth' , 'admin']);

Route::post('/mail/{id}' , [AdminController::class , 'mail'])->middleware(['auth' , 'admin']);

Route::get('/create_service' , [AdminController::class , 'create_service'])->middleware(['auth' , 'admin']);

Route::post('/add_service' , [AdminController::class , 'add_service'])->middleware(['auth' , 'admin']);

Route::get('/view_service' , [AdminController::class , 'view_service'])->middleware(['auth' , 'admin']);

Route::get('/update_service/{id}' , [AdminController::class , 'update_service'])->middleware(['auth' , 'admin']);

Route::post('/edit_service/{id}' , [AdminController::class , 'edit_service'])->middleware(['auth' , 'admin']);

Route::get('/delete_service/{id}' , [AdminController::class , 'delete_service'])->middleware(['auth' , 'admin']);
    //------------------------------User Routes -------------------------
Route::post('/contact' , [HomeController::class , 'contact']);

Route::get('/details_room/{id}' , [HomeController::class , 'details_room']);

Route::post('/add_booking/{id}' , [HomeController::class , 'add_booking']);

Route::get('/our_rooms' , [HomeController::class , 'our_rooms']);

Route::get('/hotel_gallary' , [HomeController::class , 'hotel_gallary']);

Route::get('/about_us' , [HomeController::class , 'about_us']);

Route::get('/contact_us' , [HomeController::class , 'contact_us']);

Route::get('/booked_room' , [HomeController::class , 'booked_room'])->name('booked_room');;

Route::get('/cancel_booking/{id}' , [HomeController::class , 'cancel_booking']);

Route::post('/checkout/{id}' , [HomeController::class , 'checkout'])->name('checkout');

Route::get('/checkout/success', [HomeController::class , 'success'])->name('checkout.success');

Route::get('/checkout/cancel', [HomeController::class , 'cancel'])->name('checkout.cancel');






