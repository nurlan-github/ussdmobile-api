<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UniversalController;
use App\Http\Controllers\SelectedController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MalumotlarController;
use App\Http\Controllers\FoydaliController;
use App\Http\Controllers\GetDataController;
use App\Models\GetData;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/api', function (Request $request) {
    return $request->user();
});


Route::get('/universal/companyId/{companyId}/type/{typeId}/dataTypeId/{dataTypeId}', [UniversalController::class,'show']);
Route::get('/universal/allBookMarks', [UniversalController::class,'bookMarks']);
Route::get('/selected/all', [SelectedController::class, 'index']);
Route::get('/resource/companyId/{companyId}/type/{typeId}', [ResourceController::class,'show']);
Route::get('/company/all', [CompanyController::class, 'index']);
Route::get('/company/id/{id}', [CompanyController::class, 'show']);
Route::get('/malumotlar/companyId/{companyId}', [MalumotlarController::class,'show']);  
Route::get('/foydali/all', [FoydaliController::class, 'index']);

Route::get('/universal/all', [UniversalController::class, 'index']);

Route::get('/resource/all', [ResourceController::class, 'index']);

Route::get('/getdata/all', [GetDataController::class, 'index']);

Route::get('/malumotlar/all', [MalumotlarController::class, 'index']);

  
Route::get('/universal/{id}', [UniversalController::class, 'showuniversal']);
Route::get('/getdata/{id}', [GetDataController::class, 'show']);
Route::get('/resource/{id}', [ResourceController::class, 'showresource']);
Route::post('/getdata/update', [GetDataController::class, 'update']);
Route::post('/getdate/store', [GetDataController::class, 'store']);
Route::post('/resource/store', [ResourceController::class, 'store']);
Route::get('/foydali/{id}', [FoydaliController::class, 'show']);
Route::post('/malumotlar/store', [MalumotlarController::class, 'store']);
Route::post('/malumotlar/update', [MalumotlarController::class, 'update']);
Route::get('/malumotlar/{id}', [MalumotlarController::class, 'showmalumot']);
Route::delete('/malumotlar/delete/{id}', [MalumotlarController::class, 'destroy']);

Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/update', [AdminController::class, 'update']);

Route::get('version/all', [AdminController::class, 'all']);
Route::get('version/{id}', [AdminController::class, 'show']);
Route::get('download/all', [AdminController::class, 'downloads']);


Route::post('/universal/store', [UniversalController::class, 'store']);