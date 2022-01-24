<?php

namespace App\Http\Controllers;

use App\Models\Selected;
use Illuminate\Http\Request;

class SelectedController extends Controller
{
  protected $response = [
    'success' => false,
    'message' => 'product no created',
    'data'    => [],
  ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Selected::all();
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
     * @param  \App\Models\Selected  $selected
     * @return \Illuminate\Http\Response
     */
    public function show(Selected $selected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selected  $selected
     * @return \Illuminate\Http\Response
     */
    public function edit(Selected $selected)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selected  $selected
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selected $selected)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selected  $selected
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selected $selected)
    {
        //
    }
}
