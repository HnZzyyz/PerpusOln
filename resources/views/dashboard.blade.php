@extends('layoutUtama')
@section('judulnya_atas')
    Dashboard
@endsection
@section('title-judul')
    Dashboard
@endsection
@section('konten-utama')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="container">
        <div class="box box-large">
            <div class="title"
                style="text-align: left; padding-left: 20px; margin-left: -20px; font-weight: bold; font-size: 25px; margin-top: -10px; margin-bottom: 5px;width: 100%; max-width: 800px; height: 6vh">
                Statistik</div>
            <canvas id="myChart"></canvas>
            <div id="legend"></div> <!-- Div untuk custom legend -->
            <script>
                // Data untuk chart
                const data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Buku Dipinjam',
                        data: @json($dataStatistik['bukuDipinjam']),
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Total Buku',
                        data: @json($dataStatistik['totalBuku']),
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Siswa',
                        data: @json($dataStatistik['siswa']),
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                console.log(data); // Tambahkan log untuk memeriksa data

                // Konfigurasi chart
                const config = {
                    type: 'line',
                    data: data,
                    options: {
                        plugins: {
                            legend: {
                                display: false // Menghilangkan legenda default
                            }
                        }
                    }
                };

                // Membuat chart
                const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                );

                // Fungsi untuk menambahkan tanda sesuai warna dan label
                function generateLegendHTML(chart) {
                    const legends = chart.data.datasets.map((dataset) => {
                        const color = dataset.backgroundColor;
                        const label = dataset.label;
                        return `
                        <div style="display: flex; align-items: center; margin-bottom: 5px;">
                            <div style="width: 10px; height: 10px; background-color: ${color}; border-radius: 50%; margin-right: 8px; margin-left: 8px;"></div>
                            <span style="margin-left: 5px; margin-right:5px;">${label}</span>
                        </div>
                    `;
                    });
                    return legends.join('');
                }

                // Menghasilkan HTML untuk legenda
                const legendContainer = document.getElementById('legend');
                legendContainer.innerHTML = generateLegendHTML(myChart);
            </script>

        </div>
        <div class="box d-block" style="padding: 0px;">
            <div class="title"
                style=" width: 100%; height: 10vh; padding-top: 1.5vh; font-weight: bolder; font-size: 30px; border-bottom:1px solid black;">
                Buku</div>
            <div class="value" style="text-align: left;">
                @foreach ($databuku as $d)
                    <li>{{ $d->judul }}</li>
                @endforeach
            </div>
        </div>
        <div class="info-box">
            <div class="icon" style="background-color: #1E90FF;">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                    <path fill="black" fill-rule="evenodd"
                        d="M4.727 2.712c.306-.299.734-.494 1.544-.6C7.105 2.002 8.209 2 9.793 2h4.414c1.584 0 2.688.002 3.522.112c.81.106 1.238.301 1.544.6c.305.3.504.72.613 1.513c.112.817.114 1.899.114 3.45v7.839H7.346c-.903 0-1.519-.001-2.047.138c-.472.124-.91.326-1.299.592V7.676c0-1.552.002-2.634.114-3.451c.109-.793.308-1.213.613-1.513m2.86 3.072a.82.82 0 0 0-.828.81c0 .448.37.811.827.811h8.828a.82.82 0 0 0 .827-.81a.82.82 0 0 0-.827-.811zm-.828 4.594c0-.447.37-.81.827-.81h5.517a.82.82 0 0 1 .828.81a.82.82 0 0 1-.828.811H7.586a.82.82 0 0 1-.827-.81"
                        clip-rule="evenodd" />
                    <path fill="black"
                        d="M7.473 17.135c-1.079 0-1.456.007-1.746.083a2.46 2.46 0 0 0-1.697 1.538q.023.571.084 1.019c.109.793.308 1.213.613 1.513c.306.299.734.494 1.544.6c.834.11 1.938.112 3.522.112h4.414c1.584 0 2.688-.002 3.522-.111c.81-.107 1.238-.302 1.544-.601c.216-.213.38-.486.495-.91H7.586a.82.82 0 0 1-.827-.81c0-.448.37-.811.827-.811H19.97c.02-.466.027-1 .03-1.622z" />
                </svg>
            </div>
            <div class="info">
                <span class="label">Buku Di Pinjam</span>
                <span class="value">18</span>
            </div>
        </div>
        <div class="info-box">
            <div class="icon" style="background-color: #32CD32;">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 26 26">
                    <path fill="black"
                        d="M9.875 0a1 1 0 0 0-.406.156S8.204.952 6.844 1.813c-1.36.86-2.873 1.808-3.219 2l-.063.03C2.306 4.618 2.045 5.884 2 6.594c-.003.033 0 .06 0 .095c-.011.266 0 .437 0 .437v13.063C2 22.087 4.213 23 6.313 23c.7 0 1.4-.113 2-.313c.4-.2.687-.6.687-1v-10.5c0-2.3.5-3.38 2-4.28c.4-.2 4.594-3.095 4.594-3.095c.2-.2.406-.606.406-.906v-.094c0-.4-.2-.706-.5-.906s-.7-.2-1 0c-.1.1-6.2 4.207-7.5 4.907c-1.3.8-2.513.993-2.813.593c-.093-.093-.174-.378-.187-.656v-.063c.001-.272.071-.784.625-1.125c.562-.313 1.957-1.204 3.313-2.062c.573-.363.644-.402 1.093-.688A1 1 0 0 0 11 2.5V1a1 1 0 0 0-1.125-1m8 3.5a1 1 0 0 0-.438.188s-5.034 3.387-5.906 3.968l-.031.032c-.724.543-1.153 1.189-1.344 1.78A3.3 3.3 0 0 0 10 10.5v.313a1 1 0 0 0 0 .093V23c0 1.9 2.188 3 4.188 3c.9 0 1.712-.194 2.312-.594c1.2-.7 7-5.218 7-5.218c.3-.2.5-.482.5-.782v-13c0-.5-.194-.8-.594-1c-.3-.2-.793-.106-1.093.094c-1.6 1.2-5.907 4.588-6.907 5.188c-1.4.8-2.719 1-3.219.5c-.2-.2-.187-.388-.187-.688q.008-.26.063-.438c.056-.174.17-.388.593-.718c.02-.016.01-.015.031-.031c.723-.483 2.934-1.99 4.376-2.97A1 1 0 0 0 19 6V4.5a1 1 0 0 0-1.125-1M22 10.813v2l-5 3.874v-2z" />
                </svg>
            </div>
            <div class="info">
                <span class="label">Total Buku</span>
                <span class="value">{{ $db }}</span>
            </div>
        </div>
        <div class="info-box">
            <div class="icon" style="background-color: #FF6347;">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 12 12">
                    <path fill="black"
                        d="M7.915 2H8.5A1.5 1.5 0 0 1 10 3.5v6A1.5 1.5 0 0 1 8.5 11h-5A1.5 1.5 0 0 1 2 9.5v-6A1.5 1.5 0 0 1 3.5 2h.585A1.5 1.5 0 0 1 5.5 1h1a1.5 1.5 0 0 1 1.415 1M5 2.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0-.5.5M7 5a1 1 0 1 0-2 0a1 1 0 0 0 2 0M4 7.5v.003q0 .047.006.093q.006.072.032.182c.036.143.107.333.25.522c.3.402.84.7 1.712.7s1.411-.298 1.713-.7a1.46 1.46 0 0 0 .281-.704A1 1 0 0 0 8 7.503V7.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5" />
                </svg>
            </div>
            <div class="info">
                <span class="label">Siswa</span>
                <span class="value">{{ $ds }}</span>
            </div>
        </div>
    </div>
@endsection

@section('css-khusus')
    <style>
        .info-box {
            display: flex;
            height: 100px;
            align-items: center;
            border: 2px solid #1f2937;
            border-radius: 10px;
            padding: 10px;
            background-color: #f9fafb;
        }

        .info-box .icon {
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            margin-right: 15px;
            margin-left: 10px;
        }

        .info-box .icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .info-box .info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .info-box .label {
            font-weight: bold;
            font-size: 16px;
        }

        .info-box .value {
            font-size: 24px;
            font-weight: bold;
        }

        .value li {
            margin-top: 5px;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 2rem;
            height: auto;
            /* Ubah dari 6vh ke auto untuk menyesuaikan tinggi */
            width: 100%;
            list-style: decimal;
            border-bottom: 1px solid black;
            overflow-wrap: break-word;
            /* Memecah kata yang panjang */
            word-wrap: break-word;
            /* Mendukung browser yang lebih lama */
            text-align: left;
            /* Menjaga teks tetap rata kiri */
            white-space: normal;
            /* Memungkinkan teks untuk membungkus ke baris berikutnya */
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 20px;
            max-width: 820px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
        }

        .box {
            background-color: #f9fafb;
            border: 2px solid #1f2937;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .box-large {
            grid-column: span 2;
            height: 330px;
            position: relative;
            display: block;
        }

        .box-small {
            height: 100px;
        }

        #legend {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
@endsection
