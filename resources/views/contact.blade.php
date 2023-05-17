@extends('layouts.app')

@section('content') 
<link href= "/css/stylecontact.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   
  <div class="bg">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Naga City, Camarines Sur</div>
          <div class="text-two">Philippines</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+ 63 912 345 6789</div>
          <div class="text-two">+ 63 998 765 4321</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">cleanixco@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Our Socials</div>
        <p> Visit our socials. You can connect with us there!</p>
        <br>
      <form action="#">
      <div class="wrapper">
         <div class="icon facebook">
            <div class="tooltip">
               Facebook
            </div>
            <span><i class="fab fa-facebook-f"></i></span>
         </div>
         <div class="icon twitter">
            <div class="tooltip">
               Twitter
            </div>
            <span><i class="fab fa-twitter"></i></span>
         </div>
         <div class="icon instagram">
            <div class="tooltip">
               Instagram
            </div>
            <span><i class="fab fa-instagram"></i></span>
         </div>
         <div class="icon youtube">
            <div class="tooltip">
               YouTube
            </div>
            <span><i class="fab fa-youtube"></i></span>
         </div>
      </div>

      @endsection		