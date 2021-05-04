@extends('layouts.frontend.main')

@section('content')
<div class="mt-4">
    <form action="prosesform" method="POST">
    @csrf
    <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" type="text " name="nim">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label><br>
        <input class="form-control" type="text " name="nama"><br>
    </div>
        <input class="btn btn-primary" type="submit" value="kirim"><br>
    </form>
    </div>
@endsection