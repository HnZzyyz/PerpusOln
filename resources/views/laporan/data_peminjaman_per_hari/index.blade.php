@extends('layoutUtama')

@section('judulnya_atas')
    Data Peminjaman Per Hari
@endsection

@section('title-judul')
    Laporan
@endsection

@section('css-khusus')
    <style>
        .container {
            width: 95%;
            max-width: 1200px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ced4da;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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
            width: 200px;
            height: 40px;
            font-size: 14px;
            border: 2px solid black;
            border-radius: 5px;
            outline: none;
            background-color: #ced4da;
        }

        .search-box button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 0 12px;
            font-size: 16px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 3px solid black;
        }

        th {
            background-color: #fff;
        }

        .btn-add {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 15px;
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

        @media (max-width: 768px) {
            .header h1 {
                font-size: 18px;
            }

            .search-box input {
                font-size: 14px;
                width: 100%;
            }

            table, th, td {
                font-size: 12px;
            }

            .btn-add a {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
@endsection

@section('konten-utama')
    <div class="container">
        <div class="header">
            <h1>Data Peminjaman Per Hari</h1>
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
                    <th>ID</th>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Buku</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>2024-08-01</td>
                    <td>2024-08-08</td>
                    <td>BK001</td>
                    <td>Buku A</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2024-08-02</td>
                    <td>2024-08-09</td>
                    <td>BK002</td>
                    <td>Buku B</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td>2024-08-03</td>
                    <td>2024-08-10</td>
                    <td>BK003</td>
                    <td>Buku C</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4</td>
                    <td>2024-08-04</td>
                    <td>2024-08-11</td>
                    <td>BK004</td>
                    <td>Buku D</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5</td>
                    <td>2024-08-05</td>
                    <td>2024-08-12</td>
                    <td>BK005</td>
                    <td>Buku E</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
