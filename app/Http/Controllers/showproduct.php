<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class showproduct extends Controller
{
    function show(Request $req)
    {
            $itemid=$req->input('itemid');
            $item=product::where('id',$itemid)->get();
        return view('productpage',['item'=>$item]);
    }
}
