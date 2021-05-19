@extends('layouts.frontend.main')

@section('content')

<h1 class="mt-4">Nama Ketua Jurusan <?= $kajur ?></h1>
<h2>ID user adalah {{$id_user}}</h2>
<p>Nama User Saat Ini adalah {{$current_user->name}}</p>
<p>Email User Saat Ini adalah {{$current_user->email}}</p>
    <?php echo $nama_prodi ?>
    <p> Waktu saat ini: {{time()}}</p>
    @if (5 < 10) <h2>Kondisi Benar</h2>
        @endif
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae distinctio ad sed deleniti provident maiores, quasi qui eius exercitationem sit fugit illo fugiat tempore nulla ipsa rem quo natus cum?</p>
        <p>Nama universitas :<b>{{$universitas}} </b>

@endsection     
