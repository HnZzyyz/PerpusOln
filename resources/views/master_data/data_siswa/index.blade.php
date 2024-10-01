@extends('layoutUtama')
@section('judulnya_atas')
    Data Siswa
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
            border: 2px solid ;
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
            overflow: hidden; /*Tambahkan overflow hidden untuk menghindari elemen overflow*/
            background-color:#fff;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 3.5px solid black; /* Border bawah untuk setiap cell */
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
            <h1>Data Siswa</h1>
            <div class="search-box">
                <input type="text" style="background-color: #CED4D8" >
                <button><i class="fa fa-search"></i> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="black" d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"/></svg>
                </button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No_Telp</th>
                    <th>Kode_Kelas</th>
                    <th>Edit & Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nisn}}</td>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->no_telp}}</td>
                    <td>{{$siswa->kode_kelas}}</td>
                    <td>
                        <button> <a style="text-decoration: none; color: black;" href="/Master_data/data_siswa/edit_data{{ $siswa->nisn }}">Edit</a></button>
                        <button> <a style="text-decoration: none; color: black;" href="/Master_data/data_siswa/delete{{ $siswa->nisn }}">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        <div class="btn-add">
            <a href="/Master_data/data_siswa/tambah_data">Tambah Data +</a>
        </div>
    </div>
@endsection
