<?php

namespace App\Http\Controllers;

use App\Models\Malumotlar;
use Illuminate\Http\Request;

class MalumotlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Malumotlar::all();
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
     * @param  \App\Models\Malumotlar  $malumotlar
     * @return \Illuminate\Http\Response
     */
    public function show($companyId)
    {
        $result = Malumotlar::where('companyId', $companyId)->first();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Malumotlar  $malumotlar
     * @return \Illuminate\Http\Response
     */
    public function edit(Malumotlar $malumotlar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Malumotlar  $malumotlar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Malumotlar $malumotlar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Malumotlar  $malumotlar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Malumotlar $malumotlar)
    {
        //
    }
}
