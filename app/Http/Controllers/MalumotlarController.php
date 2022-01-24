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
        $updated = Malumotlar::create(
          [
            'info' => $request->info,
            'calling' => $request->calling,
            'companyId' => $request->companyId,
          ]
        );
        if ($updated) {
          $this->response['success'] = true;
          $this->response['message'] = "created malumat";
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
    public function update(Request $request)
    {
      $updated = Malumotlar::where('id', $request->id)->update(
        [
          'info' => $request->info,
          'calling' => $request->calling,
          'companyId' => $request->companyId,
        ]
      );
      if ($updated) {
        $this->response['success'] = true;
        $this->response['message'] = "updated malumat";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "no updated";
        return response($this->response, 200);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Malumotlar  $malumotlar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $updated = Malumotlar::find($id)->delete();
    if ($updated) {
      $this->response['success'] = true;
      $this->response['message'] = "deleted malumat";
      return response($this->response, 200);
    } else {
      $this->response['success'] = true;
      $this->response['message'] = "no deleted";
      return response($this->response, 200);
    }
    }

    public function showmalumot($id){
      $resource = Malumotlar::find($id);
      if (empty($resource)) {
        $this->response['success'] = true;
        $this->response['message'] = "malumot not found";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "malumotlar";
        $this->response['data'] = $resource;
        return response($this->response, 200);
      }
    }
}
