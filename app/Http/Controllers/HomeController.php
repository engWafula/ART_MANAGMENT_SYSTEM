<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arts;
class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
         if(Auth::User()->usertype=="0"){
            $art = arts::all();

            return view("user.home1",compact('art'));
         }
         else{
             return view('admin.home');
         }
        }
        else{
            
            return redirect()->back();
        }
    }

  

  
    public function addArt(){
        if(Auth::id()){
         if(Auth::user()->usertype==1){
            return view('admin.addArt');
         }
         else{
             return redirect()->back();
         }
        }
        else{
            return redirect("login");
        }
        
    }

    public function upload(Request $request){
        $art= new Arts;
        $image=$request->file;
        $imagename=time().".".$image->getClientOriginalExtension();
        $request->file->move("ArtPieces",$imagename);
        $art->image=$imagename;
        $art->name=$request->name;
        $art->phone=$request->phone;
        $art->email=$request->email;
        $art->city=$request->city;
        $art->description=$request->description;
        $art->category=$request->category;
        $art->save();
        
        return redirect()->back()->with("message","DOCTOR  ADDED  SUCCESSFULLY");
    }
}