<a href="{{ route('book.edit', $model) }} " class="btn btn-success">Edit</a>
<button href="{{ route('book.destroy', $model) }}" class="btn btn-danger" id="delete">
    Hapus
</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Yakin data akan dihapus?',
            text: "Data yang dihapus tidak bisa kembali!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                Swal.fire(
                'Yeay..!',
                'Data Berhasil dihapus.',
                'success'
                )
            }
        })
    });
</script>

{{-- <form action="{{ route('author.destroy', $model) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form> --}}