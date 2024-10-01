@extends('layoutUtama')
@section('judulnya_atas')
    Edit Data Buku
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
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: auto;
        }

        .form-container {
            width: 55%;
        }

        .card-container {
            width: 30%;
        }

        .lin {
            width: max-content;
            height: max-content;
            margin: auto;
        }

        .lin label {
            width: 100px;
            text-align: left;
            font-weight: bold;
        }
        
        .lin input, .lin textarea, .lin select{
            width: 30vw;
        }

        .colus {
            width: 42vw;
            height: 6vh;
            margin: auto;
            margin-top: 20px;
        }

        .lin button {
            background-color: #343a40;
            color: white;
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

        .card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            height: 45vh;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 18px;
            }
            .content {
                flex-direction: column;
            }
            .form-container, .card-container {
                width: 100%;
            }
        }
    </style>
@endsection
@section('konten-utama')
<div class="container">
    <div class="header">
        <h1>Edit Data Buku</h1>
    </div>
    <div class="content">
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="kode_buku" class="col-form-label">Kode Buku</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="kode_buku" name="kode_buku" value="{{ $buku->kode_buku }}" class="form-control" required>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="judul" class="col-form-label">Judul</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="judul" name="judul" value="{{ $buku->judul }}" class="form-control" required>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="penerbit" class="col-form-label">Penerbit</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" required>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="tahun_terbit" class="col-form-label">Tahun Terbit</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" class="form-control" required>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="tahun_terbit" class="col-form-label">Sipnosis</label>
                    </div>
                    <div class="lin col-auto">
                        <textarea id="sipnosis" name="sipnosis" class="form-control" required>{{ $buku->sipnosis }} </textarea>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="penulis" class="col-form-label">Penulis</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="text" id="penulis" name="penulis" value="{{ $buku->penulis }}" class="form-control" required>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="genre" class="col-form-label">Genre</label>
                    </div>
                    <div class="lin col-auto">
                        <select id="genre" name="genre" class="form-control" required>
                            <option value="" disabled selected>Pilih Genre</option>
                            <option value="Fiksi" {{ $buku->genre == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                            <option value="Non-Fiksi" {{ $buku->genre == 'Non-Fiksi' ? 'selected' : '' }}>Non-Fiksi</option>
                            <option value="Fantasi" {{ $buku->genre == 'Fantasi' ? 'selected' : '' }}>Fantasi</option>
                            <option value="Romantis" {{ $buku->genre == 'Romantis' ? 'selected' : '' }}>Romantis</option>
                            <option value="Thriller" {{ $buku->genre == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                            <option value="Horor" {{ $buku->genre == 'Horor' ? 'selected' : '' }}>Horor</option>
                            <option value="Sastra" {{ $buku->genre == 'Sastra' ? 'selected' : '' }}>Sastra</option>
                            <option value="Biografi" {{ $buku->genre == 'Biografi' ? 'selected' : '' }}>Biografi</option>
                            <option value="Sejarah" {{ $buku->genre == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                            <option value="Ilmiah" {{ $buku->genre == 'Ilmiah' ? 'selected' : '' }}>Ilmiah</option>
                        </select>
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <label for="foto" class="col-form-label">Foto Buku</label>
                    </div>
                    <div class="lin col-auto">
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                </div>
                <div class="colus row align-items-center">
                    <div class="lin col-auto">
                        <button type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-container">
            <div class="card text-center">
                <h4>Cover Buku</h4>
                @if($buku->foto)
                    <img id="preview-cover" src="{{ asset('images/'.$buku->foto) }}" alt="Foto Buku" style="max-width: 150px; height: auto; margin: 0 auto; margin-top: 10px;">
                @else
                    <p>Tidak ada foto buku</p>
                @endif
                <script>
                    document.getElementById('foto').addEventListener('change', function(e) {
                        var preview = document.getElementById('preview-cover');
                        var file = e.target.files[0];
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        }

                        if (file) {
                            reader.readAsDataURL(file);
                        } else {
                            preview.src = "";
                            preview.style.display = 'none';
                        }
                    });

                    document.addEventListener('DOMContentLoaded', function() {
                        var errorAlert = document.getElementById('errorAlert');
                        if (errorAlert) {
                            errorAlert.addEventListener('click', function() {
                                this.style.display = 'none';
                            });
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
