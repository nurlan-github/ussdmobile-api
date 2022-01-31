<?php

namespace App\Http\Controllers;

use App\Models\Universal;
use Illuminate\Http\Request;

class UniversalController extends Controller
{
    protected $response = [
      'success' => false,
      'message' => 'message',
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
        $universal = Universal::create([
          'title' => $request->title,
          'amount' => $request->amount,
          'type' => $request->type,
          'companyId' => $request->companyId,
          'dataTypeId' => $request->dataTypeId,
          'connect' => $request->connect,
          'allocation' => $request->allocation,
          'bookMarks' => $request->bookMarks,
        ]);
        if ($universal) {
          $this->response['success'] = true;
          $this->response['message'] = "created universal";
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

      $universal = Universal::find($id);
      if(!empty($universal)){
        $this->response['success'] = true;
        $this->response['message'] = "universal";
        $this->response['data'] = $universal;
        return response($this->response, 200);
      }else{
        $this->response['success'] = true;
        $this->response['message'] = "not found universal";
        return response($this->response, 200);
      }
    }
}
