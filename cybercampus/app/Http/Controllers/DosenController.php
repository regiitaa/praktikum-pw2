<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::simplePaginate(7);
        return view('dosen.index', compact('mahasiswa'));
    }
    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('dosen.index');
    }
    
}
