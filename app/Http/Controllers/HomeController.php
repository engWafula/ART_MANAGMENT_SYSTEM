<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Arts;
use App\Models\Orders;
class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
         if(Auth::user()->usertype==0){
            $art = arts::all()->where("status","approved");;

            return view("user.home1",compact('art'));
         }
         else if(Auth::user()->usertype==1){
             $username=Auth::user()->name;
            // $names =user::where('name',$userId)->get();
            // // $username=Auth::user()->id;
            // // $name=user::where('name',$username)->get();
              //$orders=orders::all();
             return view('admin.home',compact('username'));
         }
         else{
             
             return view('Super.admin');
         }
        }
        else{
         
            return redirect()->back();
        }
    }



    public function approve($id){
        $data=orders::find($id);
        $data->status="approved";
        $data->save();
        return redirect()->back();
    }

    
    public function cancel_order($id){
        $data=orders::find($id);
        $data->status="Canceled";
        $data->save();
        return redirect()->back();
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
        $art->status="pending";
        
        if(Auth::id()){
            // $art->user_id=Auth::user()->id;
           
             $art->user_name=Auth::user()->name;
            
            
        }
        $art->save();
        
        return redirect()->back()->with("message","Art Piece Posted Sucessfully");
    }

    public function posted(){
     
     
        if(Auth::id()){
            //this code here will get  the specific appointments made by  a  user  who  is  logged in
            if(Auth::user()->usertype==1){
            $userId=Auth::user()->name;
            $pieces =arts::where('user_name',$userId)->get();
            return view("admin.myPieces",compact("pieces"));   
            }
            else{
                return redirect()->back();
            }
        }
       else{
           return redirect('login');
       }
    }

    public function deleted($id){
        $data=arts::find($id);
        $data->delete();
        return redirect()->back();
    }

    public  function  Order(){
              
    if(Auth::id()){
        //this code here will get  the specific appointments made by  a  user  who  is  logged in
        if(Auth::user()->usertype==1){
        $artist_name=Auth::user()->name;
        $order =orders::where('selectedArtist',$artist_name)->get();
        return view("admin.Orders",compact("order"));   
        }
    }
   else{
       return redirect()->back();
   }
    }


       
    public  function sendemail($id){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
        $data=orders::find($id);
        return view('admin.sendEmail',compact('data'));
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