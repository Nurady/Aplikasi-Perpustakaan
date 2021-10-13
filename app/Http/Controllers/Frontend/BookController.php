<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('pages.frontend.book.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('pages.frontend.book.detail', compact('book'));
    }

    public function borrow(Book $book)
    {
        // BorrowHistory::create([
        //     'user_id' => auth()->id(),
        //     'book_id' => $book->id,
        // ]);
        // return 'OK';
        $user = auth()->user();

        if ($user->borrow()
                 ->where('books.id', $book->id)
                 ->where('returned_at', null)
                 ->count() > 0) {
            return back()->with('toast2', 'maaf, peminjaman gagal, Buku ' . $book->title . ' sudah anda pinjam');
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');

        // Alert::success('Success', 'Berhasil Meminjam Buku');
        return back()->with('toast', 'Berhasil Meminjam Buku ' . $book->title);
    }
}
