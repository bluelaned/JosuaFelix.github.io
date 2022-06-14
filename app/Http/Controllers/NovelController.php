<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;
use str;

class NovelController extends Controller
{
    public function index()
    {
        $novel = Novel::all();
        return view('admin.novel', compact('novel'));
    } 
  
    public function edit($id)
    {
        $novel = Novel::find($id);
        return view('edit-novel', compact('novel'));
    }

    public function update($id, Request $request)
    {
        Novel::where('id', $request['id'])->update(
        [
            'judul' => $request['ijudul_buku'],
            'harga' => $request['iharga'],
            'penulis' => $request['ipenulis'],
        ]);
        return redirect('admin/novel')->with('sukses','Berhasil di Update');
    }
 
   
    public function deletenovel($id){
        Novel::where('id', $id)->delete();
        return redirect('admin/novel');
    }
 
    /**
     *  Show the form for creating  a new resource.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novel = new Novel;
        $novel-> judul = $request->judul_buku;
        $novel-> harga = $request->harga;
        $novel-> penulis = $request->penulis;
        $novel-> save();

        return redirect('admin/index');   
    }

}
