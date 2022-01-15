<?php

namespace App\Http\Controllers;
use App\Models\Arts;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function  index(){
        $art = arts::all();
        return view("user.home1",compact('art'));
    }
//     public  function  index(){
        
//         return view("user.home");
//     }
 }