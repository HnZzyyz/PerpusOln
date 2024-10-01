@extends('layoutUtama')
@section('judulnya_atas')
    Pengembalian
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
            <h1>Pengembalian</h1>
            <div class="search-box">
                <button class="btn btn-primary">
                    <a href="/Transaksi/pengembalian/create" style="text-decoration: none; color: white;">Create Data</a>
                </button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NISN</th>
                    <th>Tanggal_Kembali</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123456789</td>
                    <td>2022-04-01</td>
                   
                </tr>
                <tr>
                    <td>2</td>
                    <td>987654321</td>
                    <td>2022-06-03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>567890123</td>
                    <td>2022-10-04</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>345678901</td>
                    <td>2023-09-05</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>234567890</td>
                    <td>2023-06-06</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
