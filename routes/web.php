<?php

use App\Http\Controllers\admincontrol;
use App\Http\Controllers\mycontrol;
use App\Http\Controllers\usercontrol;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::view('link','link');
Route::view('reg','register');
Route::post('insertdata',[mycontrol::class,'ins']);

Route::view('/','login');
Route::post('logindata',[mycontrol::class,'login']);

Route::view('uhome','userhome');

// Route::view('addcom','addcomplaint');

Route::get('loadcom',[usercontrol::class,'loadprod']);

Route::post('addcom',[usercontrol::class,'addcom']);

Route::get('showdata',[usercontrol::class,'showdata']);
// Route::view('showcom','showcompalint');

Route::view('ahome','adminhome');

Route::get('adshowdata',[admincontrol::class,'adshowdata']);
// Route::view('showadcomp','showadcom');
Route::view('serviceallo','serviceallocate');

Route::get('serviceall/{id}',[admincontrol::class,'dispservicep']);
Route::post('addserve',[admincontrol::class,'addservicepro']);

Route::view('addprod','addproduct');
Route::post('insprod',[admincontrol::class,'addprod']);

Route::view('adds','addserviceprovider');
Route::post('insertsdata',[admincontrol::class,'insser']);

Route::view('shome','servicehome');

