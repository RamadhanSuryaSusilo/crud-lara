<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset ('template/css/bootstrap.css') }}">
</head>
<body>

    <div class="text-center mt-5">
        <h2>Login Aplikasi</h2>
        Silahkan login menggunakan akun yang baru anda buat sebelumnya
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @if(session('gagal'))
                    <p class="text-danger">{{ session('gagal') }}</p>
                    @endif
                    <form action="{{ route('login.submit') }}" method="post">
                        @csrf
                        <label>email</label>
                        <input type="email" name="email" class="form-control">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                        <button class="btn btn-sm btn-success mt-2">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>