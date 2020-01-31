<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class buyproduct extends Controller
{
    function list()
    {

        $data=DB::table('product')->paginate(7)->onEachSide(1);
        return view('buy',['data'=>$data]);
    }
}
