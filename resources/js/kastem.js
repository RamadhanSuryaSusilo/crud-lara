<script>
document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua tombol hapus
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function () {
            let id = this.getAttribute('data-id');
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Konfirmasi penghapusan
            if (confirm('Apakah kamu yakin ingin menghapus data ini?')) {
                // Proses penghapusan via AJAX
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
                .then(response => response.json())
                .then(data => {
                    if (data.message === 'Data berhasil dihapus') {
                        alert(data.message);
                        // Hapus form dari DOM jika penghapusan berhasil
                        document.getElementById(`delete-form-${id}`).remove();
                    } else {
                        alert('Gagal menghapus data');
                    }
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                });
            }
        });
    });
});
</script>
