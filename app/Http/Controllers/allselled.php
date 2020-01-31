<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use App\product;
use Illuminate\Http\Request;

class allselled extends Controller
{
    function allselllist()
    {
        $user = Auth::user();
        $allsell=product::where('seller',$user->name)->get();
        $count=count($allsell);
      
            return view('allsell',['allsell'=>$allsell])->with('count', $count);
    
       
    }
}
