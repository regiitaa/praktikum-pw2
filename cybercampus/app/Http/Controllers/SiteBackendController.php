<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;



class SiteBackendController extends Controller
{
    public function index()
    {
        return view('sitebackend.index');
    }
    public function formTambahBackend()
    {
        return view('layanan.form_tambah_backend');
    }
    public function tambahBackend(request $request)
    {
        $layanan = new Layanan();
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('admin.layanan');
    }
    public function detail($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.detail_backend', compact('layanan'));
    }
    public function formUbah($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.formubah_backend', compact('layanan'));
    }
    public function ubah(request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        // echo "sudah diubah";
        return redirect()->route('layanan.detail_backend', ['id'=> $layanan->id]);
    }
    public function hapus($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return redirect()->route('admin.layanan');
    }

}
