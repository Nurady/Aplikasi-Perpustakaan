@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-header">
            {{-- <div style="margin-bottom: 10px !important; text-align: center !important;">
                <h3 class="box-title" >DATA PENULIS</h3>
            </div> --}}
            <div>
                <a href="{{ route('author.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead class="thead-dark" style="background-color:#95a5a6 !important">
                    <tr>
                        <th>#</th>
                        <th>Nama Penulis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <form action="" method="post" id=deleteForm>
        @csrf
        @method('delete')
        <input type="submit" value="Hapus" style="display: none;">
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
    <script src="{{ asset('assets/dist/js/bs-notify.min.js') }}"></script>
    @include('layouts.partials.alert')
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('author.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable:false, searchable:false },
                    { data: 'name' },
                    { data: 'action' },
                ]
            });
        });
    </script>
@endpush