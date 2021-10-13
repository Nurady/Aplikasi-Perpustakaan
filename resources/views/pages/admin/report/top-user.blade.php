@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead class="thead-dark" style="background-color:#95a5a6 !important">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jumlah Peminjaman</th>
                        <th>Bergabung</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $page = 1;
                        if (request()->has('page')) {
                            $page = request('page');
                        }
                        $no = ($paginate * $page) - ($paginate - 1);
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->borrow_count }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
@endsection