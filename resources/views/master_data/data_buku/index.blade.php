@extends('layoutUtama')
@section('judulnya_atas')
    Data Buku
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

        .btn-add a:hover {
            background-color: #495057;
        }

        .book-cover {
            width: 100px;
            height: auto;
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

            .btn-add a {
                font-size: 14px;
                padding: 8px 16px;
            }

            .book-cover {
                width: 50px;
            }
        }
    </style>
@endsection
@section('konten-utama')
    <div class="container">
        <div class="header">
            <h1>Data Buku</h1>
            <div class="search-box">
                <form action="/Master_data/data_buku/search" method="GET">
                    <input type="text" name="query" style="background-color: #CED4D8" placeholder="Cari Buku...">
                    <button type="submit"><i class="fa fa-search"></i> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="black" d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"/></svg>
                    </button>
                </form>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Cover_Buku</th>
                    <th>Kode_Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Tahun_Terbit</th>
                    <th>Edit & Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($db as $buku)                    
                <tr>
                    <td><img src="{{ asset('images/' . $buku->foto) }}" alt="Cover Buku" class="book-cover" style="width: 60px; height: auto;"></td>
                    <td>{{ $buku->kode_buku }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        <button><a href="/Master_data/data_buku/edit_data/{{ $buku->kode_buku }}" style="text-decoration: none; color: black;">Edit</a></button>
                        <button><a href="/Master_data/data_buku/delete/{{ $buku->kode_buku }}" style="text-decoration: none; color: black;">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            <ul class="pagination">
                @if ($db->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $db->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                @for ($i = 1; $i <= $db->lastPage(); $i++)
                    <li class="page-item {{ $db->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $db->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($db->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $db->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
        <div class="btn-add">
            <a href="/Master_data/data_buku/tambah_data">Tambah Data +</a>
        </div>
    </div>
@endsection