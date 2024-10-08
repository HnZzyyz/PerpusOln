<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("judulnya_atas")</title>
    {{-- Link CSS --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    {{-- Css Yield --}}
    @yield('css-khusus')
    <style>
        #masterDataCollapse li{
            list-style-type: disc;
        }
        #transaksiCollapse li{
            list-style-type: disc;
        }
        #laporanCollapse li{
            list-style-type: disc;
        }
        .nav {
            width: 860px;
        }

        * {
            box-sizing: border-box;
            /* Pastikan padding dan border tidak menyebabkan ukuran elemen melebar */
        }
    </style>
</head>

<body style="background: #0f0f0f; margin: 0;">

    {{-- Svg --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>
    

    {{-- End SVG --}}

    {{-- Bungkusan --}}
    <div class="bungkusan"
        style="width: 100%; height: 100vh; padding-top: 33px; padding-left: 44px; padding-right: 44px">

        {{-- Header --}}
        <header class="d-flex">
            <nav class=" container-fluid navbar rounded d-flex flex-shrink-0 flex-nowrap" style="height: 95px; width: 100%;">
                <div class="logo flex-column flex-shrink-0"
                    style="width: 280px; height: 95px; border: 4px solid #CED4D8; display: flex; justify-content: center; align-items: center;">
                    <a class="navbar-brand" style="color: white; font-weight: bold; font-size: 35px">Perpus.Oln </a>
                </div>
                <div class="nav rounded flex-shrink-0 flex-column"
                    style="background-color: #CED4D8; width: 68.5vw; height: 95px; display: flex; justify-content: left; align-items: left;">
                    <div class="isi"
                        style="height: max-content; width: max-content;margin-left: 23px; margin-top: px ">
                        <p style="font-size: 45px; font-weight: bold">@yield('title-judul')</p>
                        <p style="margin-top: -20px; margin-left:3px">{{ date('l, d F Y') }}</p>
                    </div>
                    {{-- @yield('nav') --}}
                </div>
            </nav>
        </header>
        {{-- End Header --}}

        {{-- Main --}}
        <div id="main" class="d-flex flex-nowrap" style="margin-top: 44px">

            <div id="sidebar">
                <div class="d-flex flex-column flex-shrink-0 p-3 rounded"
                    style="width: 280px; height: auto; background-color: #CED4D8">
                    <ul class="nav nav-pills flex-column mb-auto"
                        style="width: 100%;height:100%; gap: 20px; padding-left: 5px; margin-top: 10px;  padding-right: 5px; padding-top:10px; font-size: 20px">
                        <li>
                            <a href="/dashboard" class="nav-link link-body-emphasis" style="width: max-content">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right:5px; margin-top: -5px "
                                    width="35" height="35" viewBox="0 0 24 24">
                                    <path fill="black"
                                        d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1m0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1m10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1M13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-black d-flex justify-content-between dropdown align-items-center collapsed"
                                data-bs-toggle="collapse" href="#masterDataCollapse" role="button"
                                aria-expanded="false" aria-controls="masterDataCollapse" style="width: 100%;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-right:5px; margin-top: -5px "
                                        width="35" height="35" viewBox="0 0 24 24">
                                        <path fill="black"
                                            d="M20 6c0-2.168-3.663-4-8-4S4 3.832 4 6v2c0 2.168 3.663 4 8 4s8-1.832 8-4zm-8 13c-4.337 0-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3c0 2.168-3.663 4-8 4" />
                                        <path fill="black"
                                            d="M20 10c0 2.168-3.663 4-8 4s-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4z" />
                                    </svg>
                                    Master Data
                                </span>
                                <span class="bi bi-chevron-right " style="color:black;"></span>
                            </a>
                            <div class="collapse" id="masterDataCollapse" style="margin-left: 45px">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                                    style="font-size: 15px; margin-left: 10px">
                                    <li><a href="/Master_data/data_siswa" class="nav-link text-black">Data Siswa</a></li>
                                    <li><a href="/Master_data/data_buku" class="nav-link text-black">Data Buku</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link text-black d-flex justify-content-between dropdown align-items-center collapsed"
                                data-bs-toggle="collapse" href="#transaksiCollapse" role="button"
                                aria-expanded="false" aria-controls="transaksiCollapse" style="width: 100%;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        style="margin-right:5px; margin-top: -5px;" width="35" height="35"
                                        viewBox="0 0 48 48">
                                        <defs>
                                            <mask id="ipSTransactionOrder0">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff"
                                                        stroke="#fff" rx="2" />
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6" />
                                                    <path stroke="#000" stroke-linecap="round"
                                                        d="M16 19h16m-16 8h12m-12 8h8" />
                                                </g>
                                            </mask>
                                        </defs>
                                        <path fill="black" d="M0 0h48v48H0z" mask="url(#ipSTransactionOrder0)" />
                                    </svg>
                                    Transaksi
                                </span>
                                <span class="bi bi-chevron-right " style="color:black;"></span>
                            </a>
                            <div class="collapse" id="transaksiCollapse" style="margin-left: 45px">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                                    style="font-size: 15px; margin-left: 10px">
                                    <li><a href="/Transaksi/peminjaman" class="nav-link text-black">Peminjaman</a></li>
                                    <li><a href="/Transaksi/pengembalian" class="nav-link text-black">Pengembalian</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link text-black d-flex justify-content-between dropdown align-items-center collapsed"
                                data-bs-toggle="collapse" href="#laporanCollapse" role="button"
                                aria-expanded="false" aria-controls="laporanCollapse" style="width: 100%;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        style="margin-right:5px; margin-top: -5px;" width="35" height="35"
                                        viewBox="0 0 24 24">
                                        <path fill="black"
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M9 17H7v-7h2zm4 0h-2V7h2zm4 0h-2v-4h2z" />
                                    </svg>
                                    Laporan
                                </span>
                                <span class="bi bi-chevron-right " style="color:black;"></span>
                            </a>
                            <div class="collapse" id="laporanCollapse" style="margin-left: 45px">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                                    style="font-size: 13px; margin-left: 10px">
                                    <li><a href="/Laporan/data_peminjaman_per_hari" class="nav-link text-black">Data Peminjaman Per Hari</a></li>
                                    <li><a href="/Laporan/data_belum_kembali" class="nav-link text-black">Data Belum Kembali</a></li>
                                    <li><a href="/Laporan/buku_terfavorite" class="nav-link text-black">Buku Terfavorite</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Content --}}
            <div id="isi-kontent" class="rounded"
                style="background-color:#CED4D8;  width: 100%; max-width: calc(100% - 280px); height: auto; margin-left: 36px">
                @yield('konten-utama')
            </div>
            {{-- End Content --}}


        </div>
        {{-- End Main --}}

        {{-- Footer --}}
        <footer>

        </footer>
        {{-- End Footer --}}

    </div>
    {{-- End Bungkusan --}}

    {{-- Link JS --}}
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var coll = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]');
            coll.forEach(function(element) {
                element.addEventListener('click', function() {
                    var targetId = this.getAttribute('href');
                    var collapseElement = document.querySelector(targetId);

                    // Close all other collapsibles
                    document.querySelectorAll('.collapse').forEach(function(collapse) {
                        if (collapse !== collapseElement) {
                            var bsCollapse = new bootstrap.Collapse(collapse, {
                                toggle: false
                            });
                            bsCollapse.hide();
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
