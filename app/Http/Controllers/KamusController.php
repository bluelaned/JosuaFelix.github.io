<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function index(){
        return view('admin.kamus');
    }
}
