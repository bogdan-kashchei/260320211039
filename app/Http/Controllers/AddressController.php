<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\Address;


class AddressController extends Controller
{
    public function store(AddressRequest $request){

         Address::create([
            'name' => $request->name,
            'city' => $request->city,
            'area' => $request->area,
            'street' => $request->street,
            'house' => $request->house,
            'description' => $request->description,
        ]);


        return back()->withInput();
    }
    public function output(){
        $posts = Address::orderBy('street')->get();
        return view('/welcome',compact('posts'));
    }
}


