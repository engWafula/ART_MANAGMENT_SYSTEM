<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arts;
use App\Models\Orders;

class AdminController extends Controller
{

    public function approve(){
        if(Auth::id()){
            
            if(Auth::user()->usertype=='2'){
        $art = arts::all();
        return view("Super.approve",compact('art'));
    }
    else {
        return redirect()->back();
    }
}
else{
   return redirect()->back();
}
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
            
            if(Auth::user()->usertype=='2'){
            
            $pieces =arts::all();
            return view("Super.postedPieces",compact("pieces"));   
            }
            else{
                return redirect()->back();
            }
        }
       else{
           return redirect("login");
       }
   
    }

    
    public  function send_email($id){
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


    public  function  orders(){
        // $artist = user::all()->where("usertype","1");

        if(Auth::id()){
            if(Auth::user()->usertype==2){
        $orders = orders::all();
         return view("Super.orders",compact('orders'));
        }
        else{
            return redirect()->back();
        }
       }
       else{
           return redirect("login");
       }
        }


        public function deleteuser($id){
            $User=user::find($id);
            $User->delete();
            return redirect()->back();
        }
    

        public  function emailuser($id){
            if(Auth::id()){
                if(Auth::user()->usertype==2){
            $data=user::find($id);
            return view('Super.EmailUser',compact('data'));
        }
        else{
            return redirect()->back();
        }
       }
       else{
           return redirect("login");
       }
        }

    public function me(){
        
    
        if(Auth::id()){
            if(Auth::user()->usertype==2){
        $username=Auth::user()->name;
         return view("Super.Navbar",compact('username'));
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