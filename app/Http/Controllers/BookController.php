<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home() {
        $buku = Book::paginate(2);
        return view('master_data.data_buku.index',[
            'db' => $buku
        ]);
    }

    public function create()
    {
        $kode_buku = Book::orderBy('kode_buku', 'desc')->first()->kode_buku ?? 'BK-00000';
        $kode_buku = 'BK-' . str_pad((intval(substr($kode_buku, 3)) + 1), 5, '0', STR_PAD_LEFT);
        
        return view('master_data.data_buku.create', [
            'kode_buku' => $kode_buku,
        ]);
    }

    public function tambah_data(Request $request)
    {
        $request->validate([
           'kode_buku' => 'required',
           'judul' => 'required',
           'penerbit' => 'required',
           'tahun_terbit' => 'required',
           'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:255',
           'sipnosis' => 'required',
           'penulis' => 'required',
        ], [
            'kode_buku.required' => 'Kode buku harus diisi',
            'judul.required' => 'Judul buku harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahun_terbit.required' => 'Tahun terbit harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif',
            'foto.max' => 'Foto harus berukuran maksimal 2MB',
            'sipnosis.required' => 'Sipnosis harus diisi',
            'penulis.required' => 'Penulis harus diisi',
        ]);

        $buku = new Book();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sipnosis = $request->sipnosis;
        $buku->penulis = $request->penulis;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->foto = $imageName;
        }

        $buku->save();
        return redirect('/Master_data/data_buku');
    }

    public function edit($kode_buku){
        $buku = new Book();
        return view('master_data.data_buku.update', [
            'buku' => $buku::find($kode_buku)
        ]);
    }

    public function update(Request $request, $kode_buku){
        $request->validate([
           'kode_buku' => 'required',
           'judul' => 'required',
           'penerbit' => 'required',
           'tahun_terbit' => 'required',
           'foto' => 'image|mimes:jpeg,png,jpg,gif|max:255',
           'sipnosis' => 'required',
           'penulis' => 'required',
        ]);

        $buku = Book::find($kode_buku);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sipnosis = $request->sipnosis;
        $buku->penulis = $request->penulis;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $buku->foto = $imageName;
        }

        $buku->save();
        return redirect('/Master_data/data_buku');
    }
    
    public function hapus($kode_buku){
        $buku = Book::find($kode_buku);
        $buku->delete();
        return redirect('/Master_data/data_buku');
    }

    public function search(Request $request) {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect('/Master_data/data_buku'); 
        }

        $books = Book::where('judul', 'LIKE', "%{$query}%")
            ->orWhere('penerbit', 'LIKE', "%{$query}%")
            ->orWhere('penulis', 'LIKE', "%{$query}%")
            ->get();

        if ($books->isEmpty()) {
            return redirect('/Master_data/data_buku')->with('error', 'Buku tidak ditemukan'); // Menambahkan pesan error jika tidak ada buku yang ditemukan
        }

        return view('master_data.data_buku.index',  [
            'books' => $books,
            'db' => $query,
        ]);
    }
}
