<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="{{asset ('template/css/bootstrap.css') }}">
</head>
<body>

    <div class="text-center mt-5">
        <h2>Register Aplikasi</h2>
        Silahkan mengisi formulirnya untuk registrasi pada aplikasi
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('registrasi.submit') }}" method="post">
                        @csrf
                        <label>Nama lengkap</label>
                        <input type="text" name="name" class="form-control">
                        <label>email</label>
                        <input type="email" name="email" class="form-control">
                        <label>Password</label>
                        <input type="Password" name="Password" class="form-control">
                        <button type="submit" class="btn btn-sm btn-success mt-2">Registrasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>