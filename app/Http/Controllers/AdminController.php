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
            $user=user::all();

            return view("Super.admin",compact('user'));
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

    public function approved($id){
        $data=arts::find($id);
        $data->status="approved";
        $data->save();
        return redirect()->back();
    }

    public function canceled($id){
        $data=arts::find($id);
        $data->status="pending";
        $data->save();
        return redirect()->back();
    }

    public function postedPieces(){
     
     
        if(Auth::id()){
            
            if(Auth::user()->usertype==2){
            
            $pieces =arts::all();
            return view("Super.postedPieces",compact("pieces"));   
            }
        }
       else{
           return redirect()->back();
       }
    }

    
    public  function send_mail($id){
        if(Auth::id()){
            if(Auth::user()->usertype==2){
        $data=arts::find($id);
        return view('Super.sendMail',compact('data'));
    }
    else{
        return redirect()->back();
    }
   }
   else{
       return redirect("login");
   }
    }
}