@extends('layouts.backend.main')

@section('content')
<div class="mt-4">

    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Tambah Layanan</h1>
<div class="row">
    <div class="col-lg-12">

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
        </div>
        <form action="{{ route ('admin.layanan.tambahBackend') }}" method = "post">
    @csrf
        <div class= "form-group">
            <label for="nama_layanan">Nama Layanan</label>
            <input class="form-control" type="text" name="nama_layanan">
        </div>
        <div class= "form-group">
            <label for="deskripsi_layanan">Deskripsi Layanan</label>
            <textarea  class = "form-control" name="deskripsi_layanan" id="" cols="30" rows="10"></textarea>
        </div>
        <input class="btn btn-primary" type= "submit" value="simpan">

    </form>




    </div>

</div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
