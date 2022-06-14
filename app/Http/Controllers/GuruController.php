<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru', compact('guru'));
    } 

    public function edit($id)
    {
        $guru = Guru::find($id);
        // dd($guru);
        return view('edit-guru', compact('guru'));
    }

    public function update($id, Request $request)
    {
        Guru::where('id', $request['id'])->update(
        [
            'kdguru' => $request['ikode_guru'],
            'nama' => $request['inama'],
            'tmp_lahir' => $request['itmp'],
            'tal_lahir' => $request['itgl'],
            'alamat' => $request['ialamat'],
            'nohp' => $request['inohp'],
            'email' => $request['iemail'],
        ]);
        return redirect('admin/guru')->with('sukses','Berhasil di Update');
    }

   public function deleteguru($id){
        Guru::where('id', $id)->delete();
        return redirect('admin/guru');
   }

   /**
     *  Show the form for creating  a new resource.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru-> kdguru = $request->kode_guru;
        $guru-> nama = $request->nama;
        $guru-> tmp_lahir = $request->tempat_lahir;
        $guru-> tal_lahir = $request->tanggal_lahir;
        $guru-> alamat = $request->alamat;
        $guru-> nohp = $request->nohp;
        $guru-> email = $request->email;
        $guru-> save();

        return redirect('admin/guru');   
    }
}
