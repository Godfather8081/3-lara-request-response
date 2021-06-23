<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inject extends Controller
{
    //
    public function one(Request $req)
    {
        dd($req);
    }

    public function two(Request $req)
    {
        // method will give path of request without domain name and query string
        // return $req->path();

        // method will return full url with domain but without query string
        // return $req->url();

        // method will return full url with domain and with query string if any
        // return $req->fullUrl();

        // the method will return request type 
        // return $req->method();

        // the method returns true and false base on given method and request method
        // and also work in uppercase and lowercase forms 
        // return $req->isMethod('get');


        // header methods
        // this will return all headers of request
        // return $req->header();

        // it will return specific header if present and if not present it return false
        // return $req->header('host');

        // function return true and false base on if any header of given name present or not
        // return $req->hasHeader('host');

        // return bearer from Authorization key from header if present 
        // return $req->bearerToken();

        // return ip address
        return $req->ip();
    }
}
