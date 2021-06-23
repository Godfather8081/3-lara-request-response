<?php

use App\Http\Controllers\Inject;
use App\Http\Controllers\ResponseController;
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



// response
// we will learn some basic response methods and if you want to learn in deep go to
// https://laravel.com/docs/8.x/responses

// all methods which we pufform hear will we avalable in controller as well because response, 
// redirect etc methods are global 

// can pass header and other data by chaining 
Route::get('first-res', function () {
    return response('first response', 200)->header('abc', 'xyz');
});

// can pass header and other data by chaining
Route::get('second-res', function () {
    return response('second res', 200)->header('abc', 'xyz')->header('oop', 'rrr');
});

// can pass multiple headers in single chain
Route::get('third-res', function () {
    return response('third res', 200)->withHeaders([
        'abc' => 'xyz',
        'oop' => 'www'
    ]);
});

// can redirect
Route::get('forth-res', function () {
    return redirect('/');
});

// can redirect to other routes
Route::get('fifth-res/{id}', function () {
    return 'its fifth route';
})->name('fifthRoute');

Route::get('six-res', function () {
    return redirect()->route('fifthRoute', ['id' => 1]);
});


// we can also redirect to other controller method as well check one method
Route::get('sever-res', [ResponseController::class, 'one']);

Route::get('eight-res/{id}', [ResponseController::class, 'two']);


// we can also redirect to external links
Route::get('nine-res', [ResponseController::class, 'three']);


// we can return view as well
Route::get('ten-res', [ResponseController::class, 'four']);


Route::get('eleven-res', [ResponseController::class, 'fifth']);


// we can return json response 

Route::get('twelve-res', [ResponseController::class, 'six']);


// we will learn file, storage response in other sections for reference you can visit
// https://laravel.com/docs/8.x/responses