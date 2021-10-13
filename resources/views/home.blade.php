@extends('layouts.frontend')
@section('title', 'Dashboard')

@section('content')
<div class="row container">
    <h4>Buku yang sedang dipinjam</h4>
    @forelse ($books as $book)
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
                </div>
            </div>
        </div>  
    @empty
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <h5 class="header red-text darken-4">Belum ada buku dipinjam</h5>
            </div>
        </div>
    </div> 
    @endforelse
</div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}