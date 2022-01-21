<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arts;
use App\Models\Orders;

class AdminController extends Controller
{
    public function super(){
        if(Auth::id()){
         if(Auth::User()->usertype=="2"){
            $art = arts::all();

            return view("Super.admin");
         }
     
        }
        else{
         
            return redirect()->back();
        }
    }

    public function approve(){
        $art = arts::all();
        return view("Super.approve",compact('art'));
    }
}