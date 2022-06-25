<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    // hanya jalur route
    public function tampil(){
        $hasil = Barang::all();
        return view('pages.tampil', compact('hasil'));
    }
    public function index(){
        $db_index = Barang::all();
        return view('pages.home', compact('db_index'));
    }
    public function input(){
        return view('pages.input');
    }
    public function edit($id){
        $edit = Barang::find($id);
        return view('pages.edit', compact('edit'));
    }
    public function update(Request $res){
        $id = $res->id;

        // dd($id);

        Barang::where('id', $id)->update([
            'id_buku' => $res->id_buku,
            'judul_buku' => $res->judul_buku,
            'penulis' => $res->penulis,
            'penerbit' => $res->penerbit,
        ]);

        return redirect(url('home'));
    }

    // backend
    public function create(Request $res){
        // dd($req->all());
        Barang::create([
            'id_buku' => $res->id_buku,
            'judul_buku' =>$res->judul_buku,
            'penulis' => $res->penulis,
            'penerbit' => $res->penerbit,
        ]);

        // Barang::where($id)->update([
        //     'id_buku' => $res->id_buku,
        //     'judul_buku' =>$res->judul_buku,
        //     'penulis' => $res->penulis,
        //     'penerbit' => $res->penerbit,
        // ]);

       return redirect('/tampil');
    }

    public function delete($id){
        Barang::destroy($id);
        return redirect('home');
    }

}
