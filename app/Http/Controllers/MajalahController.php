<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajalahController extends Controller
{
    public function index(){
        return view('admin.majalah');
    }
}
