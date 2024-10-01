<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home()
    {
        $siswa = Students::all();
        return view('master_data.data_siswa.index', [
            'data_siswa' => $siswa
        ]);
    }

    public function create()
    {
        $lastNISN = Students::orderBy('created_at', 'desc')->first()->nisn ?? 2100;
        $lastNISN = (int)$lastNISN + 1;
        $kelas = Kelas::all();
        return view('master_data.data_siswa.create',[
            'kelas'=> $kelas,
            'lastNISN'=> $lastNISN
        ]);
    }

    public function tambah_data(Request $request)
    {
        $request->validate([
           'nisn' => 'required',
           'nama' => 'required',
           'alamat' => 'required',
           'no_telp' => 'max:13',
           'kode_kelas' => 'required',
        ], [
            'nisn.required' => 'NISN harus diisi',
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_telp.max' => 'No. Telp tidak boleh lebih dari 13 digit',
            'kode_kelas.required' => 'Kelas harus diisi',
        ]);
        $siswa = new Students();    
        $siswa->create($request->all());
        return redirect('/Master_data/data_siswa');
    }

    public function edit($nis){
        $siswa = new Students();
        $kelas = Kelas::all();
        return view('master_data.data_siswa.update', [
            'siswa'=>$siswa::find($nis)
        ], compact('kelas'));
    }

    public function update(Request $request, $nis){
        $request->validate([
           'nisn' => 'required',
           'nama' => 'required',
           'alamat' => 'required',
           'no_telp' => 'max:13',
           'kode_kelas' => 'required',
        ]);
        // Proses update data siswa
        // Buat Model Siswa
        $siswa = new Students();
        // Update data Siswa
        $siswa->find($nis)->update($request->all());
        return redirect('/Master_data/data_siswa');
    }
    
    public function hapus($nis){
        $siswa = new Students();
        $siswa->find($nis)->delete();
        return redirect('/Master_data/data_siswa');
    }
}