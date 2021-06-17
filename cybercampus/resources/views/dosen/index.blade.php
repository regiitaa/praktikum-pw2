@extends('layouts.backend.main')

@section('content')
<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Beranda Dosen</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
        <div class="card-header">Daftar Mahasiswa
        </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mahasiswa as $kat)
                        <tr>
                            <td>{{$kat->id}}</td>
                            <td> {{$kat->nim}} </td>
                            <td>  {{$kat->nama}} </td>
                            <td>  {{$kat->dosen->nama}} </td>
                            <td>


                                <a href="{{route('dosen.hapus',['id'=>$kat->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');">hapus</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
</div>
@endsection