<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($area)
    {
        if ($area == "all")
        return $this->JsonResponse(hotel::all());
    else
        return $this->JsonResponse(hotel::where('prefecture',$area)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hotel $hotel): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hotel $hotel): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotel $hotel): Response
    {
        //
    }
}
