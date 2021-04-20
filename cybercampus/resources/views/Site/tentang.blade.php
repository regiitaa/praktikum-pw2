<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>
    <h1>Nama Ketua Jurusan <?= $kajur ?></h1>
    <?php echo $nama_prodi ?>
    <p> Waktu saat ini: {{time()}}</p>
    @if (5 < 10) <h2>Kondisi Benar</h2>
        @endif
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae distinctio ad sed deleniti provident maiores, quasi qui eius exercitationem sit fugit illo fugiat tempore nulla ipsa rem quo natus cum?</p>
        <p>Nama universitas :<b>{{$universitas}} </b>
        
</body>
</html>