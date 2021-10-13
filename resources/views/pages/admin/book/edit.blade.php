@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-body">
            <form action="{{ route('book.update', $book) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group @error('title') has-error @enderror">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value={{ $book->title ?? old('title')  }}>
                    @error('title')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('description') has-error @enderror">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" rows="3" class="form-control">{{ $book->description ?? old('description') }}</textarea>
                    @error('description')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="author_id">Penulis</label>
                    <div class="col-12">
                        <select name="author_id" id="author_id" class="form-control select2" style="width: 100% !important">
                            @foreach ($authors as $author)
                                <option 
                                    value="{{ $author->id }}"
                                    @if ($author->id == $book->author_id)
                                        selected
                                    @endif
                                >
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('author_id')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('qty') has-error @enderror">
                    <label for="qty">Jumlah</label>
                    <input type="text" class="form-control" id="qty" name="qty" value={{ $book->qty ?? old('qty') }}>
                    @error('qty')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('cover') has-error @enderror">
                    <label for="cover">Sampul</label>
                    <input type="file" class="form-control-file" id="cover" name="cover">
                    @error('cover')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">UBAH</button>
            </form>
        </div>
    </div>
@endsection
@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
@endpush
@push('after-script')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script>
        $('.select2').select2();
    </script>
@endpush`