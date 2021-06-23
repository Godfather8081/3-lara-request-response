<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    //

    public function one(Request $req)
    {
        // Retrieving input 

        // return all input data from request
        // return $req->all();
        // return $req->input();

        // return specific data from request
        // return $req->input('name');

        // we can set default value as well if request don't specific data 
        // return $req->input('age', 23);

        // we can use . notation for getting nested data from array and object both
        // return $req->input('products.0');
        // return $req->input('products.0.name');

        // we can use * to tell that from products array in every object get name key 
        // return $req->input('products.*.name');


        // Retrieving query string
        // Retrieving all query strings 
        // return $req->query();

        // Retrieving specific query string 
        // return $req->query('abc');

        // can also set default if any query string not present 
        // return $req->query('xyz', 10);

        // Retrieving json data
        // we can Retrieving json data with . notation directly like we did above in products
        // return $req->input('user.name');

        // there are some cases when we get checkbox data from api at that time if we want
        // we can use boolean method to get true of false base on different values
        // the boolean method return true for 1, "1", true, "true", "on", and "yes" 
        // and for all other values it return false 
        // we can use direct input method to get data of that checkbox but the boolean will 
        // cover lots of different types and return type which we acutely want
        // return $req->boolean('is_remember');


        // Retrieving input way dynamic properties
        // we can Retrieving input not just by input method we can directly Retrieving it 
        // like properties of object from request
        // return $req->name;
        // return $req->products[0]['name'];
        // return $req->user['name'];

        // Retrieving portion of input data
        // return only keys define in array
        // return $req->only(['name', 'products']);

        // return keys other then define in array
        // return $req->except(['user', 'products']);

        // determine if input is present
        // return true and false base on key present or not
        // return $req->has('name');

        // return true if all keys present
        // return $req->has(['name', 'products']);

        // returns true if any of key present
        // return $req->hasAny(['name', 'abc']);

        // return true or false base on any key has value or not
        return $req->filled('name');


        // we will learn file and storage related request functions in future
    }
}
