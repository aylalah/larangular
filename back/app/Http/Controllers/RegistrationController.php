<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;

class RegistrationController extends Controller
{

    // public function store(Request $request)
    // {
    //     $store = new Buyer;
    //     $resp = array();
    //     $store->lname = $request->input('lname');
    //     // $userReg -> fname = $request -> input('fname');
    //     $store-> email = $request -> input('email');
    //     // $userReg -> address = $request -> input('address');
    //     // $userReg -> country = $request -> input('country');
    //     // $userReg -> image = $request -> input('img');
    
    //     $store->save();
    //     $resp['lname'] = $store->lname;                
    //     return response()->json(['message'=>$request -> input('email'), $resp ]);
    // }

   public function store(Request $request){
    $userReg = new Buyer;
    $resp = array();
        $userReg -> lname = $request -> input('lname');
        $userReg -> fname = $request -> input('fname');
        $userReg -> email = $request -> input('email');
        $userReg -> address = $request -> input('address');
        $userReg -> country = $request -> input('country');
        $userReg -> image = $request -> input('img');
        $userReg -> password = $request -> input('password');


                $userReg ->save();
                if($userReg->save()){
                    $resp[] = $userReg;
                    return json_encode($resp);                    
                }

   }
}
