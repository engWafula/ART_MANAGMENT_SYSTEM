<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\user;
use App\Models\Arts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function cancel($id){
        $data=orders::find($id);
        $data->delete();
        return redirect()->back();

        
    }

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
            $user=user::all();
             return view('Super.admin',compact("user"));
         }
        }
        else{
         
            return redirect()->back();
        }
    }



    public  function  index(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $username=Auth::user()->name;
               // $names =user::where('name',$userId)->get();
               // // $username=Auth::user()->id;
               // // $name=user::where('name',$username)->get();
                 //$orders=orders::all();
                return view('admin.home',compact('username'));
            }
            else{
                $user=user::all();
                return view('Super.admin',compact("user"));
            }
           }
           else{
       
                $art = arts::all()->where("status","approved");
                return view("user.home1",compact('art'));

}
    }

    public  function  makeOrder(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
        $artist = user::all()->where("usertype","1");
         return view("user.Order",compact('artist'));
        }
        else{
            return redirect()->back();
        }
    }
    else{
       return redirect('login');
    }
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
            $art->status="In Progress";

            if(Auth::id()){
                $art->user_id=Auth::user()->id;
            }
            
            $art->save();
        
            return redirect()->back();
         
   
    }

    public  function  details($id){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
         $data=arts::all()->where("id",$id);
        return view("user.artDetails",compact('data'));
    }
    else{
        return redirect()->back();
    }
}
else{
   return redirect('login');
}
}

   public function myOrder(){
     
     
    if(Auth::id()){
        //this code here will get  the specific appointments made by  a  user  who  is  logged in
        if(Auth::user()->usertype==0){
        $userId=Auth::user()->id;
        $orders =orders::where('user_id',$userId)->get();
        return view("user.myOrders",compact("orders"));   
        }
        else{
            return redirect()->back();
        }
     
    }
   else{
       return redirect("login");
   }
}

public  function  more($user_name){
     
    $data=arts::where("user_name",$user_name)->get();
   return view("user.more",compact('data'));
}
 }