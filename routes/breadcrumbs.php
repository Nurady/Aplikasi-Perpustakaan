<?php

// Home
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Beranda', route('admin'));
});

// Author Index
Breadcrumbs::for('author.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Data Penulis', route('author.index'));
});

// Author Create
Breadcrumbs::for('author.create', function ($trail) {
    $trail->push('Penulis', route('author.index'));
    $trail->push('Tambah Penulis', route('author.create'));
});

// Author Edit
Breadcrumbs::for('author.edit', function ($trail, $author) {
    $trail->push('Penulis', route('author.index'));
    $trail->push('Ubah Penulis', route('author.edit', $author));
});

// Book Index
Breadcrumbs::for('book.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Data Buku', route('book.index'));
});

// Book Create
Breadcrumbs::for('book.create', function ($trail) {
    $trail->push('Data Buku', route('book.index'));
    $trail->push('Tambah Buku', route('book.create'));
});

// Book Edit
Breadcrumbs::for('book.edit', function ($trail, $book) {
    $trail->push('Data Buku', route('book.index'));
    $trail->push('Ubah Buku', route('book.edit', $book));
});

// Book Index
Breadcrumbs::for('borrow.index', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Data Peminjaman', route('borrow.index'));
});

// Report Book
Breadcrumbs::for('report', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Data Laporan', route('report'));
});

// Report user
Breadcrumbs::for('report.user', function ($trail) {
    $trail->push('Beranda', route('admin'));
    $trail->push('Data User', route('report.user'));
});

