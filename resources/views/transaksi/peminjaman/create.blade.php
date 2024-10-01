@extends('layoutUtama')
@section('judulnya_atas')
    Peminjaman
@endsection
@section('title-judul')
    Transaksi
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
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            margin-left: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 8px 12px;
            width: 17vw;
            height: 5vh;
            font-size: 13px;
            border: 2px solid;
            border-radius: 5px;
            outline: none;
        }

        .search-box button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 4px 12px;
            font-size: 16px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            /*Tambahkan overflow hidden untuk menghindari elemen overflow*/
            background-color: #fff;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 3.5px solid black;
            /* Border bawah untuk setiap cell */
        }

        .btn-add {
            display: flex;
            justify-content: flex-start;
        }

        .btn-add a {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-add button:hover {
            background-color: #495057;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 18px;
            }

            .search-box input {
                font-size: 14px;
            }

            table,
            th,
            td {
                font-size: 12px;
            }

            .btn-add button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
@endsection
@section('konten-utama')
    <div class="container">
        <div class="header">
            <h1>Peminjaman</h1>
        </div>
        <form method="post" action="">
            @csrf
            <div class="container mb-3"> <!-- Menambahkan margin bawah untuk jarak antar container -->
                <div class="row mb-2">
                    <div class="col">
                        <label for="nisn" class="form-label text-start">NIS</label>
                        <input type="text" class="form-control w-100" id="nisn" name="nisn"
                            placeholder="Masukkan NISN" required>
                    </div>
                    <div class="col">
                        <label for="tanggalPinjam" class="form-label text-start">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam"
                            value="{{ date('Y-m-d') }}" required>
                    </div>
                    <span id="error-kode"></span>
                </div>
                <div class="row"> <!-- Menghilangkan jarak antar container -->
                    <div class="col">
                        <label for="nama" class="form-label text-start">Nama</label>
                        <input type="text" class="form-control w-100" id="nama" name="nama" required disabled>
                    </div>
                    <div class="col mb-2">
                        <label for="tanggalKembali" class="form-label text-start">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required
                            value="{{ date('Y-m-d', strtotime('+1 week')) }}">
                    </div>
                </div>
                <div class="col mb-2">
                    <label for="kode_kelas" class="form-label text-start">Kode Kelas</label>
                    <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" disabled required>
                </div>
                <div id="dynamicFormContainer">
                    <div class="row mb-2" id="formRow">
                        <div class="col">
                            <label for="kode_buku" class="form-label text-start">Kode Buku</label>
                            <input type="text" class="form-control w-100" id="kode_buku" name="kode_buku"
                                placeholder="Masukkan Kode Buku" value="{{ old('kode_buku') }}" required>
                        </div>
                        <div class="col">
                            <label for="judul_buku" class="form-label text-start">Judul Buku</label>
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ old('judul_buku') }}" required disabled>
                        </div>
                        <div class="col">
                            <label for="penulis" class="form-label text-start">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis') }}" required disabled>
                        </div>
                        <div class="col">
                            <label for="penerbit" class="form-label text-start">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit') }}" required disabled>
                        </div>
                        <div class="col">
                            <label for="tahun_terbit" class="form-label text-start">Tahun Terbit</label>
                            <input type="year" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required disabled>
                        </div>
                        <div class="col">
                            <label for="jumlah_buku" class="form-label text-start">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" required>
                        </div>
                        <div class="col-auto mt-4">
                            <div class="btn btn-success" style="cursor:context-menu">#</div>
                        </div>
                    </div>
                </div>
                <div id="dynamicFormBody">

                </div>
                <button type="button" class="btn btn-success mt-2" id="tambahFormButton">Tambah</button>
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </form>
    </div>
    <script src="/assets/js/axios.min.js"></script>
    <script src="/assets/js/peminjaman.js"></script>
    <script>
        document.getElementById('tambahFormButton').addEventListener('click', function() {
            tambahForm(); // Panggil fungsi untuk menambah form
        });
    </script>
@endsection
