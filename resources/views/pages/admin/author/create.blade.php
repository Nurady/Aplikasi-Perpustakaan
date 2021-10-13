@extends('layouts.master')

@section('content')
    <div class="box">
        {{-- <div class="box-header">
            <h3 class="box-title">Tambah Data Penulis</h3>
        </div> --}}
        <div class="box-body">
            <form action="{{ route('author.store') }}" method="post">
                @csrf
                <div class="form-group @error('name') has-error @enderror">
                    <label for="name">Nama Penulis</label>
                    <input type="text" class="form-control" id="name" name="name" value={{ old('name') }}>
                    @error('name')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
@endsection