@extends('layouts.frontend')
@section('title', 'Detail Buku')

@section('content')
<h4>Detail Buku</h4>
<div class="col s12 m12">
    <div class="card horizontal">
        <div class="card-image">
            <img src="{{ $book->getCover() }}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h5 class="header red-text darken-4">{{ $book->title }}</h5>
                <blockquote>
                    <p>{{ $book->description }}</p>
                </blockquote>
                <p><i class="material-icons">person</i>{{ $book->author->name }}</p>
                <p><i class="material-icons">book</i>{{ $book->qty }}</p>
            </div>
            <div class="card-action">
                <div class="card-action">
                    <form action="{{ route('book.borrow', $book) }}" method="post">
                        @csrf
                        <input type="submit" value="Pinjam Buku" class="vawes-effect vawes-light btn teal lighten-1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
<h6>Koleksi Buku Lainnya dari Penulis <span>{{ $book->author->name }}</span></h4> 
<div class="row">
    @foreach ($book->author->books->shuffle()->take(4) as $book)
        {{-- <div class="col s12 m6">
            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="{{ $book->getCover() }}" height="200px">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <a href="{{ route('book.show', $book) }}">
                            <h5 class="header">{{ Str::limit($book->title, 20) }}</h5>
                        </a>
                        <p>{{ Str::limit($book->description, 100) }}</p>
                    </div>
                    <div class="card-action">
                        <div class="card-action">
                            <form action="{{ route('book.borrow', $book) }}" method="post">
                                @csrf
                                <input type="submit" value="Pinjam Buku" class="vawes-effect vawes-light btn teal lighten-1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>      --}}
        @component('components.card-book', ['book' => $book])

        @endcomponent
    @endforeach
</div>
    
@endsection