<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //

    public function one()
    {
        return redirect()->action([ResponseController::class, 'two'], ["id" => 1]);
    }

    // now when we will go to sever-res it go to one method the method will redirect 
    // request to two method 
    // we can redirect to same controller methods and other controller methods as well
    // keep in mind the redirect()->action() only work when define class method in
    // action function its own route register like in this case we have eight-res in
    // web.php file for two method
    public function two($id)
    {
        return "its response controller two with $id";
    }


    public function three()
    {
        return redirect()->away('https://www.google.com');
    }

    public function four()
    {
        return view('response');
    }

    public function fifth()
    {
        return response()->view('response', [], 200)->header('Content-Type', 'abc');
    }

    public function six()
    {

        $data = [
            'name' => 'abc',
            'hobbies' => ['sing', 'travel']
        ];
        return response()->json($data);
    }
}
