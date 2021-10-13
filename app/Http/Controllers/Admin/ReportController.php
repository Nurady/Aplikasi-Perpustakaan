<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
                        ->orderBy('borrowed_count', 'DESC')
                        ->paginate(10);
        $paginate = 10;

        return view('pages.admin.report.top-book', [
            'title' => 'Laporan Buku',
            'books' => $books,
            'paginate' => $paginate
        ]);
    }

    public function topUser()
    {
        $users = User::withCount('borrow')
                        ->orderBy('borrow_count', 'DESC')
                        ->paginate(10);
        $paginate = 10;

        return view('pages.admin.report.top-user', [
            'title' => 'Laporan User',
            'users' => $users,
            'paginate' => $paginate
        ]);
    }
}
