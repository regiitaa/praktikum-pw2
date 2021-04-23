<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataku;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function beranda()
    {
       return view('beranda'); //lokasi file: resource/views/beranda.php
    
    }

    public function tentang ()
    {
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('Site.tentang', compact('nama_prodi','universitas','kajur'));
    }

    public function kontak ()
    {
        return view('site.kontak');
    }
    public function layanan ()
    {
        $list_layanan = [
        'Pendidikan dan Pengajaran',
        'Bakti pada Masyarakat',
        'Penelitian',
        'Pengembangan Aplikasi',
        'Analisis Data'
        ];
        return view('site.layanan', compact('list_layanan'));
    }
    
    public function percontohan ()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        return view ('site.percontohan', compact('dt'));
    }  

    public function tampilLayananRaw()
    {
        $layanan = DB::select('select * from layanan');
        return view('site.tampil_layanan_raw', compact('layanan'));


    }

    public function listDosen ($tahun)
    {
        echo "Ini adalah halaman list dosen". $tahun;
    }
}
