<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Food;
use App\Models\Chef;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        $data2=chef::all();
        return view("home",compact("data", "data2"));
    }
    public function redirects()
    {
        $data=food::all();
        $data2=chef::all();
       $type= Auth::user()->current_team_id;
       if($type=='1'){
           return view('admin.adminhome');
       }
       else{
           return view('home',compact("data","data2"));
       }
    }
}
