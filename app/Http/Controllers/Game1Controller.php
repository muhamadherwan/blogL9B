<?php

namespace App\Http\Controllers;

use App\Models\Game1;
use Illuminate\Http\Request;

class Game1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'sukses';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game1  $game1
     * @return \Illuminate\Http\Response
     */
    public function show(Game1 $game1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game1  $game1
     * @return \Illuminate\Http\Response
     */
    public function edit(Game1 $game1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game1  $game1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game1 $game1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game1  $game1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game1 $game1)
    {
        //
    }
}
