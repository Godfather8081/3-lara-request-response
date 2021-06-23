<?php

use App\Http\Controllers\Inject;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


// Laravel's Illuminate\Http\Request class provides an object-oriented way to 
// interact with the current HTTP request 
// all request related methods will be available in Illuminate\Http\Request class


// the request object is global so we can use it in route, controller and all different places

Route::get('first', function (Request $req) {
    dd($req);
});


// we can inject request to component as well
Route::get('controller-req', [Inject::class, 'one']);


// there are number of methods in request we will discuss most use full methods hear
// for more visit https://laravel.com/docs/8.x/requests
Route::get('method-test-one', [Inject::class, 'two']);
