@extends('layoutUtama')
@section('judulnya_atas')
    Edit Data Siswa
@endsection
@section('title-judul')
    Master Data
@endsection
@section('css-khusus')
    <style>
        .container {
            width: 95%;
            max-width: 1200px;
            padding: 20px;
            border-radius: 10px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            margin-left: 12px;
            margin-top: 5px;
        }

        .content {
            width: 55vw;
            height: 55vh;
            margin: auto;
            /* border: 1px solid black; */
        }

        .lin{
            width: max-content;
            height: max-content;
            margin: auto;
        }

        .lin label{
            width: 40px;
            text-align: left;
            font-weight: bold;
        }
        
        .lin input, .lin select {
            width: 30vw;
        }

        .colus {
            /* border: 1px solid black; */
            width: 45vw;
            height: 6vh;
            margin: auto;
            margin-top: 20px;
        }

        .lin button {
            background-color: #343a40;
            color: white;
            /* padding: 10px 30px; */
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 10vw;
            height: 6vh;
            justify-content: center;
            
        }

        .lin button:hover {
            background-color: #495057;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 18px;
            }
        }
    </style>
@endsection
@section('konten-utama')
    <div class="container">
        <div class="header">
            <h1>Edit Data</h1>
        </div>
        <div class="content">
            <form action="" method="post">
                @csrf
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="nisn" class="col-form-label">NISN</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="nisn" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="nama" class="col-form-label">Nama</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $siswa->nama }}">
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="alamat" class="col-form-label">Alamat</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $siswa->alamat }}">
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="no_telp" class="col-form-label">No_Telp</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="no_telp" name="no_telp" class="form-control" value="{{ $siswa->no_telp }}">
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="kode_kelas" class="col-form-label">Kode_Kelas</label>
                    </div>
                    <div class="lin col-auto">
                        <select id="kode_kelas" name="kode_kelas" class="form-control" style="">
                            @foreach($kelas as $kls)
                                <option value="{{ $kls->kode_kelas }}" {{ $siswa->kode_kelas == $kls->kode_kelas ? 'selected' : '' }}>
                                    {{ $kls->kode_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
