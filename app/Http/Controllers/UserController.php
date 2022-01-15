<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Arts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public  function  index(){
        $art = arts::all();
        return view("user.home1",compact('art'));
    }
    public  function  makeOrder(){
        
         return view("user.Order");
    }
    
    public function order(Request $request){
        $art= new Orders;
        $image=$request->file;
        $imagename=time().".".$image->getClientOriginalExtension();
        $request->file->move("ArtPieces",$imagename);
        $art->image=$imagename;
        $art->name=$request->name;
        $art->phone=$request->phone;
        $art->email=$request->email;
        $art->date=$request->date;
        $art->description=$request->description;
        $art->selectedArtist=$request->selectedArtist;
        // if(Auth::id()){
        //     $art->user_id=Auth::user()->id;
        // }
        
        $art->save();
        
        return redirect()->back();
    }
 }