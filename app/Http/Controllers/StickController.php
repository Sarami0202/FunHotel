<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($stick)
    {
        if ($stick == "all")
            return $this->JsonResponse(hotel::all());
        else
            return $this->JsonResponse(hotel::orWhere('stick1', $stick)
                ->orWhere('stick2', $stick)
                ->orWhere('stick3', $stick)
                ->orWhere('stick4', $stick)
                ->get());
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
