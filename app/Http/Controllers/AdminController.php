<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  protected $response = [
    'success' => false,
    'message' => 'product no created',
    'data'    => [],
  ];
    public function index(){
      $resource = Admin::get();
      if (empty($resource)) {
        $this->response['success'] = true;
        $this->response['message'] = "admin not found";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "admin";
        $this->response['data'] = $resource;
        return response($this->response, 200);
      }
    }

    public function update(Request $request){
      $updated = Admin::where('id', $request->id)->update(
        [
          'admin' => $request->admin,
        ]
      );
      if ($updated) {
        $this->response['success'] = true;
        $this->response['message'] = "updated admin";
        return response($this->response, 200);
      } else {
        $this->response['success'] = true;
        $this->response['message'] = "no updated";
        return response($this->response, 200);
      }
    }

  }
