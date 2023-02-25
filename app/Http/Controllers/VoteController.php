<?php

namespace App\Http\Controllers;

use App\Models\vote;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        if ($id == "all")
            return $this->JsonResponse(vote::all());
        else
            return $this->JsonResponse(vote::where('id', $id)->get());
    }

    public function check(Request $request)
    {
        return $this->JsonResponse(vote::where('ip', $request["ip"])->where('ua', $request["ua"])->
        where('date',">=", $request["time"])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        vote::insert([
            'id' => $request->id,
            'date' => $request->date,
            'ip' => $request->ip,
            'ua' => $request->ua,
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(vote $vote): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vote $vote): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vote $vote): Response
    {
        //
    }
}
