@extends('layouts.app')

@section('content')
<header class="container-fluid">
        <div class="row image-holder flex align-items-center ">
            <div class="title col-12 col-lg-6 ms-auto text-center ">
                <h1 class="text-uppercase heading-text mb-4 text-white">Your #1 One Stop <br> Cleaning Service Provider</h1>
                <button class="btn-cyan"><a href="/book" style="text-decoration:none">Book Now</a></button>
            </div>
        </div>
        <div class="row overlay "></div>
    </header>
    
    <x-cleanix-services :services="$services" :admin="$admin"></x-cleanix-services>
    <x-about-us></x-about-us>
     
@endsection
<style scoped> 
    .title{
        margin-bottom: 175px;
        margin-right: 50px;
    }
    </style>