@extends('layouts.backend.main')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Layanan Jurusan Sistem Informasi</h1>
<div class="row">
    <div class="col-lg-12">

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->

            <!-- Card Body -->
            <div class="card-body">
            Nama layanan : {{$layanan->nama_layanan}}
            <br>
            Deskripsi layanan: {{$layanan->deskripsi_layanan}}
            </div>
        </div>
        <a href="{{route('admin.layanan')}}" class="btn btn-primary">Kembali</a>

<br>
</div>

</div>
</div>
@endsection
