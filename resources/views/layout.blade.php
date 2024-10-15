<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Event listener untuk tombol hapus
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function () {
            let id = this.getAttribute('data-id'); // Mengambil ID dari tombol
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Mengambil CSRF Token

            // Menambahkan konfirmasi sebelum menghapus data
            if (confirm('Apakah kamu yakin ingin menghapus data ini?')) {
                // Jika pengguna menekan "OK", maka lanjutkan penghapusan
                fetch(`/siswa/delete/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({
                        _token: token
                    })
                })
                .then(response => {
                    // Mengecek status respons
                    if (!response.ok) {
                        throw new Error('Gagal menghapus data');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.message === 'Data berhasil dihapus') {
                        // Menghapus baris tabel berdasarkan id tanpa menampilkan alert lagi
                        let row = document.getElementById(`row-${id}`);
                        if (row) {
                            row.remove(); // Menghapus baris dari DOM
                        }
                    } else {
                        console.error('Gagal menghapus data:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                });
            } else {
                // Jika pengguna menekan "Cancel", batalkan penghapusan
                console.log('Penghapusan dibatalkan oleh pengguna');
            }
        });
    });
});
</script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('template/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center mt-3">Tugas pertama CRUD</h1>
    @if(Auth::check())
        <div class="text-center">
        <b>Halo {{ Auth::user()->name }}, anda berhasil login</b>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-sm btn-danger">logout</button>
        </form>
        </div>
    @endif
    <div class="mt-2 container">
        @yield('konten')
    </div>
    
</body>
</html>