<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})
;Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('excel-upload',[AdminController::class,'excelupload']);
Route::post('result',[AdminController::class,'result']);
Route::get('addvisitor',[AdminController::class,'addvisitor']);

Auth::routes();



