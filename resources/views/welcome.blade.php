<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('template/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center mt-3">Selamat datang di crud pemula</h1>
    <div class="text-center">
    <a class="btn btn-warning text-center" href="{{ route('siswa.tampil') }}"> kelola siswa</a>
    </div>
</body>
</html>