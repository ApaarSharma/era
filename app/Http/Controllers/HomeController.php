<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        $userdata=$user->acctype;
        if($userdata=='seller')
        {
        $data= User::where('acctype','seller')->get()->pluck('acctype');
        $selldata=product::where('seller',$user->name)->orderBy('id','desc')->paginate(2);
        return view('home',['data'=>$data])->with('selldata', $selldata);
        }
        else
        {
            $data= NULL;
            return view('home',['data'=>$data]);        
        }
    }
}
