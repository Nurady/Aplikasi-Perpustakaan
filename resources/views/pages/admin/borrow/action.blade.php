<button href="{{ route('borrow.return', $model) }}" class="btn btn-info" id="return">
    Pengembalian Buku
</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#return').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Yakin datanya sudah benar ?',
            text: "Pastikan data dan buku yang dikembalikan sama",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Betul Data Sudah Di Cek!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('returnForm').action = href;
                document.getElementById('returnForm').submit();
                Swal.fire(
                'Yeay..!',
                'Buku Berhasil Dikembalikan.',
                'success'
                )
            }
        })
    });
</script>