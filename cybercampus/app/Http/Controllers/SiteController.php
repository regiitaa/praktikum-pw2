<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
       return view('beranda'); //lokasi file: resource/views/beranda.php
    
    }

    public function tentang ()
    {
        return view('Site.tentang');
    }

    public function kontak ()
    {
        return view('Site.kontak');
    }
    public function layanan ()
    {
        return view('Site.layanan');
    }
}
