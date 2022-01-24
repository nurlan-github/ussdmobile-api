<?php

namespace App\Http\Controllers;

use App\Models\Foydali;
use Illuminate\Http\Request;

class FoydaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Foydali::all();
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
     * @param  \App\Models\Foydali  $foydali
     * @return \Illuminate\Http\Response
     */
    public function show(Foydali $foydali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foydali  $foydali
     * @return \Illuminate\Http\Response
     */
    public function edit(Foydali $foydali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foydali  $foydali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foydali $foydali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foydali  $foydali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foydali $foydali)
    {
        //
    }
}
