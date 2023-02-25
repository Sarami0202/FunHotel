<?php

namespace App\Http\Controllers;

use App\Models\hotel_email;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return (hotel_email::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = hotel_email::where('email', $request["email"])->get();
        if (count($data)==0)
            hotel_email::insert([
                'email' => $request->email
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(hotel_email $hotel_email): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hotel_email $hotel_email): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotel_email $hotel_email): Response
    {
        //
    }
}
