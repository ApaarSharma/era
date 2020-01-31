<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Auth;
class products extends Controller
{
    function saveproduct(Request $req)
    {
        $check=request()->validate([
            'name'      =>  'required|min:2',
            'type'  =>  'required',
            'price'    =>  'required',
            'description'   =>  'required|min:10',
            ]);
        $user = Auth::user();
        $userdata=$user->name;
        $req->input();
        $productimage=$req->file('productimage')->store('products');
        $product=new product;
        $product->name=$req->name;
        $product->type=$req->type;
        $product->price=$req->price;
        $product->description=$req->description;
        $product->seller=$userdata;
        $product->imagename=$productimage;
        $verify=$product->save();
        if($verify)
        {
            $req->session()->flash('savedata','ADD product Successful');
            return redirect('/addproduct');
        }
        else{
            $req->session()->flash('savedata','Product was not Added');
            return redirect('/addproduct');
        }
    }
}
