@extends('layouts.backend.main')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Jurusan Sistem Informasi</h1>
<div class="row">
    <div class="col-lg-12">

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->

          
        </div>
<h1> Layanan kami (Eloquent)</h1>
<a href="{{route('layanan.formtambah_backend')}}" class="btn btn-primary">Tambah Layanan</a>
<ul>
<br>
    @foreach($layanan as $lyn)
    <li> {{$lyn->nama_layanan}}
    <a href="{{route('layanan.detail_backend', ['id'=>$lyn->id])}}">Detail</a>
    <a href="{{route('layanan.formubah_backend', ['id'=>$lyn->id])}}">Ubah</a>
    <a href="{{route('layanan.hapus_backend', ['id'=>$lyn->id])}}">Hapus</a>

    </li>

    @endforeach
</ul>

    </div>

</div>
</div>
<!-- /.container-fluid -->

@endsection
