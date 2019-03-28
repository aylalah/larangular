<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthController extends Controller
{
    
    public function index()
    {
        return response()->json(['message'=>'test']);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $store = new User;
        $resp = array();
        $store->lname = $request->input('lname');
        // $userReg -> fname = $request -> input('fname');
        $store-> email = $request -> input('email');
        // $userReg -> address = $request -> input('address');
        // $userReg -> country = $request -> input('country');
        // $userReg -> image = $request -> input('img');
    
        // $store->save();
        // $resp['lname'] = $store->lname;                
        return response()->json(['message'=>$request -> input('email') ]);
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
