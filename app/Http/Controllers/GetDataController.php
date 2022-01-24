<?php

namespace App\Http\Controllers;

use App\Models\GetData;
use Illuminate\Http\Request;

class GetDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GetData::all();
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
     * @param  \App\Models\GetData  $getData
     * @return \Illuminate\Http\Response
     */
    public function show(GetData $getData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GetData  $getData
     * @return \Illuminate\Http\Response
     */
    public function edit(GetData $getData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GetData  $getData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetData $getData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GetData  $getData
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetData $getData)
    {
        //
    }
}
