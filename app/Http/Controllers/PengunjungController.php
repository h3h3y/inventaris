<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjung = Pengunjung::with('user')->get();

        // dd($pengunjung);

        return view('pengunjung.tampil', compact('pengunjung'));
    }

    public function isi()
    {
        $user = User::all();

        return view('pengunjung.input', compact('user'));
    }

    public function input(Request $res)
    {
        // dd($res);
        Pengunjung::create(['user_id' => $res->user_id]);

        return redirect('pengunjung')->with('info', 'Data berhasil diinput!');
    }
}
