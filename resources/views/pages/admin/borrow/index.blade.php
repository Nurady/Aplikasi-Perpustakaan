@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead class="thead-dark" style="background-color:#95a5a6 !important">
                    <tr>
                        <th>#</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <form action="" method="post" id=returnForm>
        @csrf
        @method('PUT')
        <input type="submit" value="Return" style="display: none;">
    </form>
@endsection

@push('after-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('after-script')
    <!-- DataTables -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('borrow.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable:false, searchable:false },
                    { data: 'user_name' },
                    { data: 'book_title' },
                    { data: 'action' },
                ]
            });
        });
    </script>
@endpush