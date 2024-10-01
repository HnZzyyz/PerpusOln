@extends('layoutHome')
@section('title')
    Beranda
@endsection
@section('content')
    <div class="cardteks twld-container twld-w-auto twld-mt-12">
        <h1 class="twld-text-xl sm:twld-text-2xl twld-font-semibold twld-mb-2 twld-text-center responsive-text">Selamat
            Datang di Perpustakaan Online Kami!</h1>
        <p class="twld-mb-2 twld-text-center twld-mx-auto twld-text-xs sm:twld-text-sm responsive-paragraph">Temukan buku
            terbaru dan terfavorit yang sering dipinjam oleh pengunjung kami. Akses mudah kapan saja dan di mana saja.</p>
        <h1 class="twld-text-xl sm:twld-text-2xl twld-font-semibold twld-mb-2 twld-text-center responsive-text">Ayo Temukan
            Bacaan Terbaikmu!</h1>
    </div>
    <div
        class="twld-flex twld-flex-col sm:twld-flex-row twld-space-y-4 sm:twld-space-y-0 sm:twld-space-x-4 twld-mt-6 twld-w-full twld-max-w-2xl twld-mx-auto twld-justify-center">
        <a href="/buku_All" class="twld-w-full twld-max-w-xs twld-mx-auto">
            <button type="button"
                class="twld-rounded-lg twld-w-full twld-h-12 twld-px-4 twld-py-2 twld-bg-zinc-300 
        twld-text-black twld-font-bold twld-transition twld-duration-300 twld-ease-in-out hover:twld-bg-zinc-600 
        focus:twld-outline-none focus:twld-ring-2 focus:twld-ring-offset-2 focus:twld-ring-zinc-500 responsive-button">
                Lihat Buku
            </button>
        </a>
    </div>
    <div class="twld-mt-10"></div> <!-- Menambahkan jarak di antara tombol dan input -->
    <div class="twld-flex twld-items-center twld-w-full twld-max-w-md  twld-mx-auto twld-justify-center  responsive-search"
        style="padding: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <form action="/cariBuku" method="get" class="twld-w-full twld-flex twld-bg-white twld-rounded-md">
            <input type="text" name="query"
                class="twld-px-3 twld-py-2 twld-w-full twld-border twld-border-gray-300 twld-rounded-md twld-shadow-sm twld-bg-transparent twld-text-black twld-text-xs sm:twld-text-sm"
                placeholder="Cari buku...">
            <button type="submit" class="twld-bg-transparent twld-border-none twld-px-2 twld-py-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="twld-h-4 twld-w-4" fill="none" viewBox="0 0 24 24"
                    stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M18.4 10.6a7.8 7.8 0 1 1-15.6 0 7.8 7.8 0 0 1 15.6 0z" />
                </svg>
            </button>
        </form>
    </div>

    <div
        class="twld-flex twld-bg-zinc-300 twld-shadow-md twld-rounded-lg twld-p-2 twld-w-full twld-max-w-4xl twld-mt-6 twld-mx-auto twld-h-auto">
        <!-- Mengurangi padding untuk mengurangi gap -->
        <div class="twld-w-48 twld-ml-5 twld-mr-5 twld-flex twld-mb-4 twld-mt-4 twld-justify-center twld-flex-col twld-items-center">
            @if(isset($books) && count($books) > 0)
                @foreach($books as $book) <!-- Mengiterasi setiap buku -->
                    <img src="{{ asset('images/' . $book->foto) }}" alt="{{ $book->judul }}"
                        class="twld-w-40 twld-h-auto twld-rounded-lg twld-mb-2"> <!-- Menetapkan lebar tetap untuk gambar -->
                @endforeach
            @else
                @if(isset($data) && count($data) > 0) <!-- Memastikan $data ada -->
                    <img src="{{ asset('images/' . $data[0]->foto) }}" alt="{{ $data[0]->judul }}"
                        class="twld-w-40 twld-h-auto twld-rounded-lg twld-mb-2"> <!-- Menetapkan lebar tetap untuk gambar -->
                @endif
            @endif
        </div>
        <div class="twld-w-full text-center twld-mb-4 twld-mt-4 ">
            <h2 class="twld-text-lg twld-font-semibold twld-text-black">
                @if(isset($books) && count($books) > 0)
                    @foreach($books as $book) <!-- Mengiterasi setiap buku -->
                        {{ $book->judul }} <!-- Menampilkan judul buku -->
                    @endforeach
                @else
                    @if(isset($data) && count($data) > 0) <!-- Memastikan $data ada -->
                        {{ $data[0]->judul }}
                    @endif
                @endif
            </h2>
            <p class="twld-text-sm twld-text-black twld-mb-2">
                @if(isset($books) && count($books) > 0)
                    @foreach($books as $book) <!-- Mengiterasi setiap buku -->
                        {{ $book->sipnosis }} <!-- Menampilkan sipnosis buku -->
                    @endforeach
                @else
                    @if(isset($data) && count($data) > 0) <!-- Memastikan $data ada -->
                        {{ $data[0]->sipnosis }}
                    @endif
                @endif
            </p>
            <!-- Mengurangi margin bawah untuk mengurangi gap -->
            <a href="/detail/{{ isset($books) && count($books) > 0 ? $books[0]->kode_buku : $data[0]->kode_buku }}"
                class="twld-text-white twld-bg-gradient-to-r twld-from-green-400 twld-via-green-500 twld-to-green-600 hover:twld-bg-gradient-to-br twld-focus:ring-4 twld-focus:outline-none twld-focus:ring-green-300 twld-dark:focus:ring-green-800 twld-shadow-lg twld-shadow-green-500/50 twld-dark:shadow-lg twld-dark:shadow-green-800/80 twld-font-medium twld-rounded-lg twld-text-xs twld-px-3 twld-py-1.5 twld-text-center twld-me-1 twld-mb-1">
                Detail
            </a>
        </div>
    </div>
    <style>
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0, 0, 0, 0.5); /* Latar belakang transparan */
        }
        .modal-content {
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); /* Pusatkan modal */
            background-color: white; 
            padding: 20px; 
            border-radius: 5px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .modal-content p {
            color: black;
        }

        .close {
            color: black;
            cursor: pointer;
        }
    </style>

    <!-- Modal untuk menampilkan pesan error -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('errorModal').style.display='none'">&times;</span>
            <p id="errorMessage"></p>
        </div>
    </div>

    <script>
        @if(session('error'))
            document.getElementById('errorMessage').innerText = "{{ session('error') }}"; // Menetapkan pesan error
            document.getElementById('errorModal').style.display = 'block'; // Menampilkan modal
        @endif
    </script>
@endsection
