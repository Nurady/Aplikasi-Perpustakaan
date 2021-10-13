<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Author;
use App\BorrowHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::latest();
        return datatables()->of($authors)
            ->addColumn('action', 'pages.admin.author.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function books()
    {
        // $books = Book::orderBy('title', 'ASC');
        // $books = Book::with('author')->latest();
        $books = Book::latest()->get();
        $books->load('author');

        return datatables()->of($books)
            ->addColumn('author', function(Book $model) {
                return $model->author->name;
            })
            ->editColumn('cover', function(Book $model) {
                return '<img src="'. $model->getCover() .'" height="150px">';
            })
            ->addColumn('action', 'pages.admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

    public function borrows()
    {
        // $borrows = BorrowHistory::isBorrowed()->latest();
        $borrows = BorrowHistory::isBorrowed()->latest()->get();
        $borrows->load(['book', 'user']);

        return datatables()->of($borrows)
            ->addColumn('user_name', function(BorrowHistory $model) {
                return $model->user->name;
            })
            ->addColumn('book_title', function(BorrowHistory $model) {
                return $model->book->title;
            })
            ->addColumn('action', 'pages.admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}

// ->addColumn('action', function(Author $author) {
//     return '
//     <a href="'. route('author.edit', $author) .'" class="btn btn-success">Edit</a>
//     <a href="'. route('author.destroy', $author) .'" class="btn btn-danger">Hapus</a>
//     ';
// })
