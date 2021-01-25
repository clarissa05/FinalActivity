<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mastercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home',[mastercontroller::class,'main']);
Route::get('/generic',[mastercontroller::class,'generic']);
Route::get('/index',[mastercontroller::class,'index']);
/*Route::get('/home', [mastercontroller::class,'mastertem']  {
   ;
});
*/