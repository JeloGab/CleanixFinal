<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $service = Services::find($id);
        $services = Services::all();
        $booking = Booking::all();
       
        return view('book', ["service"=> $service, "services"=> $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create([
            'phone_number' => $request['book_phonenumber'],
            'first_name'=> $request['book_firstname'],
            'last_name'=> $request['book_lastname'],
            'address' => $request['book_address'],
            'email' => $request['book_email'],
            'booking_date' => $request['book_bookingdate'],
            'booking_time' => $request['book_bookingtime'],
            'service' => $request['book_service'],
            'comment' => $request['book_comment'],
            'customer_id' => Auth::id()
        ]);
        return redirect('ourservices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
