<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $admin = false;
        // get all the products
        $services = Services::all();
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
        if ($user != null) {
            if ($user->isAdmin) {
                $admin = true;
                $services = Services::where('user_id', '=', $user->id)->get();
            }
        }
        //pass the data to the view
        return view('shop', ['services' => $services, 'admin' => $admin]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the filename of image uploaded
        $filename = $request->img->getClientOriginalName();
        // store in public folder
        $request->img->move(public_path('img'), $filename);


        $services = Services::create([
            'service_name' => $request['service_name'],
            'description' => $request['service_description'],
            'img' => $filename,
            'user_id' => Auth::id()
        ]);
        return redirect('ourservices');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Services::find($id);
        return view('editService', ['services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = Services::find($id);
        if ($request->hasFile('img')) {
            $filename = $request->img->getClientOriginalName();
            $request->img->move(public_path('img'), $filename);
        } else {
            $filename = $services->img;
        }
        $services->service_name = $request->service_name;
        $services->description = $request->description;
        $services->img = $filename;
        $services->save();
        return redirect("ourservices");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id);


        $services->delete();
        return redirect("ourservices");

    }
}
