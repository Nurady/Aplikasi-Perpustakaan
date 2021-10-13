<?php

namespace App\Http\Controllers\Admin;

use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;

class BorrowController extends Controller
{
    public function index()
    {
        return view('pages.admin.borrow.index', [
            'title' => 'Data Peminjaman'
        ]);
    }

    public function returnBook(Request $request, BorrowHistory $borrowHistory)
    {
        $borrowHistory->update([
            'returned_at' => Carbon::now(),
            'admin_id' => auth()->id()
        ]);

        $borrowHistory->book()->increment('qty');

        // Alert::success('Success', 'Pengembalian buku berhasil');
        return back();
    }
}
