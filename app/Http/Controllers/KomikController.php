<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomikController extends Controller
{
    public function index(){
        return view('admin.komik');
    }
}
