@extends('layoutUtama')
@section('judulnya_atas')
    Tambah Data Buku
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
            height: max-content;
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
        @if ($errors->any())
            <div class="alert alert-danger" id="errorAlert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="header">
            <h1>Tambah Data</h1>
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
                            <input type="text" id="kode_buku" name="kode_buku" class="form-control" value="{{ $kode_buku }}">
                        </div>
                    </div>
                    <div class="colus row align-items-center">
                        <div class="lin col-auto">
                            <label for="judul" class="col-form-label">Judul</label>
                        </div>
                        <div class="lin col-auto">
                            <input type="text" id="judul" name="judul" class="form-control">
                        </div>
                    </div>
                    <div class="colus row align-items-center">
                        <div class="lin col-auto">
                            <label for="penerbit" class="col-form-label">Penerbit</label>
                        </div>
                        <div class="lin col-auto">
                            <input type="text" id="penerbit" name="penerbit" class="form-control">
                        </div>
                    </div>
                    <div class="colus row align-items-center">
                        <div class="lin col-auto">
                            <label for="tahun_terbit" class="col-form-label">Tahun Terbit</label>
                        </div>
                        <div class="lin col-auto">
                            <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control">
                        </div>
                    </div>
                    <div class="colus row align-items-center mb-4">
                        <div class="lin col-auto">
                            <label for="sipnosis" class="col-form-label">Sipnosis</label>
                        </div>
                        <div class="lin col-auto">
                            <textarea id="sipnosis" name="sipnosis" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="colus row align-items-center mt-6">
                        <div class="lin col-auto">
                            <label for="penulis" class="col-form-label">Penulis</label>
                        </div>
                        <div class="lin col-auto">
                            <input type="text" id="penulis" name="penulis" class="form-control">
                        </div>
                    </div>
                    <div class="colus row align-items-center mt-6">
                        <div class="lin col-auto">
                            <label for="genre" class="col-form-label">Genre</label>
                        </div>
                        <div class="lin col-auto">
                            <select id="genre" name="genre" class="form-control" required>
                                <option value="" disabled selected>Pilih Genre</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Non-Fiksi">Non-Fiksi</option>
                                <option value="Fantasi">Fantasi</option>
                                <option value="Romantis">Romantis</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Horor">Horor</option>
                                <option value="Sastra">Sastra</option>
                                <option value="Biografi">Biografi</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Ilmiah">Ilmiah</option>
                            </select>
                        </div>
                    </div>
                    <div class="colus row align-items-center">
                        <div class="lin col-auto">
                            <label for="foto" class="col-form-label">Cover Buku</label>
                        </div>
                        <div class="lin col-auto">
                            <input type="file" id="foto" name="foto" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <div class="colus row align-items-center">
                        <div class="lin col-auto">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-container">
                <div class="card text-center">
                    <h4>Cover Buku</h4>
                    <img id="preview-cover" src="#" alt="Preview Cover Buku"
                        style="max-width: 150px; height: auto; margin: 0 auto; margin-top: 10px; display: none;">
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
