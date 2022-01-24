<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
        return Resource::all();
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
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $typeId)
    {
        $result = Resource::where('type',$typeId)->where('companyId', $companyId)->get();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $Resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $Resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $Resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $Resource)
    {
        //
    }

    public function showresource($id){
      $resource = Resource::find($id);
      if(empty($resource)){
        $this->response['success'] = true;
        $this->response['message'] = "resource not found";
        return response($this->response, 200);
      }else{
        $this->response['success'] = true;
        $this->response['message'] = "resources";
        $this->response['data'] = $resource;
        return response($this->response, 200);
      }
    }
}
