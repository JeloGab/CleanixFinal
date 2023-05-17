<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = false;
        // get all the products
        $services = Services::all();

// dd($services);
        //pass the data to th view
        return view('home', ['services' => $services, 'admin' => $admin]);

    }
}
