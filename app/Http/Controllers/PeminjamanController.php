<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\Students;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function home(){
        $pj = Peminjaman::all();
        return view("transaksi.peminjaman.index",[
            'dp' => $pj
        ]);
    }

    public function getSiswa($nisn){
        $siswa = Students::where('nisn',$nisn);
        if($siswa->exists()){
            return response()->json($siswa->first());
        }
        return response()->json(['pesan'=>'Data tidak ditemukan'],401);
    }
    
    public function getBuku($kode_buku) {
        $buku = Book::where('kode_buku',$kode_buku);
        if($buku->exists()) {
            return response()->json($buku->first());
        }
        return response()->json(['pesan'=>'Data tidak ditemukan'],401);
    }
    
    public function create(){
        return view('transaksi.peminjaman.create');
    }
    public function tambahData(Request $request) {
        $peminjaman = Peminjaman::create( [
            'nisn' => $request->nisn,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali
        ]
        );
        $id_peminjaman = $peminjaman->id;
        if (is_array($request->kode_buku) && is_array($request->jumlah)) {
            for ($i=0; $i < count($request->kode_buku) ; $i++) { 
                DetailPeminjaman::create([
                    'kode_buku' => $request->kode_buku[$i],
                    'id_peminjaman' => $id_peminjaman,
                    'jumlah' => $request->jumlah[$i]
                ]);
            }
        }
        return redirect("/Transaksi/peminjaman");

    }
    
}
