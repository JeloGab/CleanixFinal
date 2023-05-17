@extends('layouts.app')
@section('content')
<x-cleanix-services :services="$services" :admin="$admin">
@if($admin)
    <a href="/ourservices/add">
        <button class="btn-dark-green text-white text-uppercase border-0 py-2 px-4">Add Service</button>
    </a>
    @endif

</x-cleanix-services>
@endsection
