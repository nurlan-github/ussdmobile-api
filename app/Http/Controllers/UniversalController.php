<?php

namespace App\Http\Controllers;

use App\Models\Universal;
use Illuminate\Http\Request;

class UniversalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Universal::all();
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
     * @param  \App\Models\Universal  $universal
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $typeId, $dataTypeId)
    {
        $result = Universal::where('type',$typeId)->where('companyId', $companyId)->where('dataTypeId', $dataTypeId)->get();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Universal  $universal
     * @return \Illuminate\Http\Response
     */
    public function edit(Universal $universal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Universal  $universal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universal $universal)
    {
        //
    }

    public function bookMarks()
    {
        return Universal::where('bookMarks',1)->get();
    }

    public function showuniversal($id){
      return Universal::where('id', $id)->get();
    }
}
