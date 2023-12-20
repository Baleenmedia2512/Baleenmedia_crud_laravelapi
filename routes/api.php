<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/todos',[RestController::class,'store']);
//Route::get('testing', function(){
 //   return 'this is a test api';
//});
Route::post('add-product',[ProductController::class,'adding']);
Route::put('edit-product',[ProductController::class, 'edit']);
Route::delete('delete-product',[ProductController::class, 'delete']);
Route::get('getdata',[ProductController::class, 'getData']);
//Route::get('/products/{id}', 'ProductController@getData');

