<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexguru()
    {
        $user = Guru::all();
        return view('user.guru',['users'=> $user]);
    } 

    public function indexnovel()
    {
        $user = Novel::all();
        return view('user.novel',['users'=> $user]);
    } 
}
