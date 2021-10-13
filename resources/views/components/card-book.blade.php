<div class="col s12 m6">
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
</div>  