<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bukuAll() {
        $bukuAll = Book::all();
        return view('user_view.buku_all', [
            'data' => $bukuAll
        ]);
    }

    public function index() {
        $b = Book::all();
        return view('user_view.index2', [
            'data'=> $b
        ]);
    }

    public function detail($kode_buku){
        $buku = new Book();
        return view('user_view.detail_buku', [
            'data' => $buku::find($kode_buku)
        ]);
    }

    public function search(Request $request) {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect('/home'); 
        }

        $books = Book::where('judul', 'LIKE', "%{$query}%")
            ->orWhere('penerbit', 'LIKE', "%{$query}%")
            ->orWhere('penulis', 'LIKE', "%{$query}%")
            ->get();

        if ($books->isEmpty()) {
            return redirect('/home')->with('error', 'Buku tidak ditemukan'); // Menambahkan pesan error jika tidak ada buku yang ditemukan
        }

        return view('user_view.index2',  [
            'books' => $books,
            'query' => $query,
        ]);
    }
}
