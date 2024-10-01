<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $siswa = Students::count();
        $siswaa = Students::all();
        $buku = Book::count();
        $bukuu = Book::limit(5)->get();
        $dataStatistik = [
            'bukuDipinjam' => $siswa,
            'totalBuku'=> $buku,
            'siswa'=> $siswa,
        ];
        return view('dashboard', [
            'ds' => $siswa,
            'db' => $buku,
            'databuku' => $bukuu,
        ],compact('dataStatistik'));
    }
}
