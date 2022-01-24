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
      $updated = GetData::create(
          [
            'positsion' => $request->positsion
          ]
        );
      if ($updated) {
        $this->response['success'] = true;
        $this->response['message'] = "created postion";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "no created";
        return response($this->response, 200);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GetData  $getData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $getdata = GetData::find($id);
      if (empty($getdata)) {
        $this->response['success'] = true;
        $this->response['message'] = "getdata not found";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "resources";
        $this->response['data'] = $getdata;
        return response($this->response, 200);
      }
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
    public function update(Request $request)
    {
        $updated = GetData::where('id', $request->id)
        ->update(
          [
            'positsion' => $request->positsion
            ]
        );
        if($updated){
          $this->response['success'] = true;
          $this->response['message'] = "updated postion";
          return response($this->response, 200);
        }else{
          $this->response['success'] = true;
          $this->response['message'] = "no updated";
          return response($this->response, 200);
        }
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
