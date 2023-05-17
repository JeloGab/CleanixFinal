@extends('layouts.app')

@section('content') 

<link href= "/css/mystyle.css" rel="stylesheet">
        <section class = "banner">
            <div class = "card-container">
                <div class = "card-img">
                </div>

                <div class = "card-content">
                    <h3>BOOK A SERVICE</h3>
                    <form method="POST" action="{{route('book')}}" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
						<div class = "form-row">
                            <input class="form-control @error('book_firstname') is-invalid @enderror" required id="book_firstname" name="book_firstname" type="Text" placeholder="First Name" value="{{ old('first_name') }}">
                        </div>

						<div class = "form-row">
                            <input class="form-control @error('book_lastname') is-invalid @enderror" required id="book_lastname" name="book_lastname" type="text" placeholder="Last Name" value="{{ old('last_name') }}">
                        </div>

						<div class = "form-row">
							<input class="form-control @error('book_phonenumber') is-invalid @enderror" required id="book_phonenumber" name="book_phonenumber" type="number" placeholder="Phone Number" value="{{ old('phone_number') }}">
						</div>

						<div class = "form-row">
							<input class="form-control @error('book_email') is-invalid @enderror" required id="book_email" name="book_email" type="email" placeholder="Email Address" value="{{ old('email') }}">
						</div>

						<div class = "form-row">
							<input class="form-control @error('book_address') is-invalid @enderror" required id="book_address" name="book_address" type="text" placeholder="Address" value="{{ old('address') }}">
						</div>
						<div class = "form-row">
							<input class="form-control @error('book_bookingdate') is-invalid @enderror" required id="book_bookingdate" name="book_bookingdate" type="text" placeholder="Booking Date" value="{{ old('booking_date') }}" onfocus="(this.type='date')">
						</div>

						<div class = "form-row">
							<input class="form-control @error('book_booking time') is-invalid @enderror" required id="book_bookingtime" name="book_bookingtime" type="text" placeholder="Booking Time" value="{{ old('booking_time') }}" onfocus="(this.type='time')">
						</div>
                        <div class = "form-row">
						<input class="form-control @error('book_service') is-invalid @enderror" required id="book_service" name="book_service" type="text" placeholder="Enter Your Service" value="{{ old('service') }}">
                        </div>
						<div class = "form-row">
						<textarea class ="form-control @error('book_comment') is-invalid @enderror" required id="book_comment" name="book_comment" placeholder="Other Comments" value="{{ old('comment') }}" cols="20" rows="8" ></textarea>
						</div>
                        <div class = "form-row">
                            <input type = "submit" value = "Submit Form">
							<input type="reset" name="reset" value="Reset"> 
                        </div>
                    </form>
                </div>
            </div>

		@endsection