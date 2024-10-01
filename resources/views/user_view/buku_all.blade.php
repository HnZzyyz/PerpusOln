@extends('layoutHome')
@section('title')
Perpus.Oln
@endsection
@section('content')
<style>
    .siuuu::-webkit-scrollbar{
        display: none;
    }
</style>
<div class="twld-flex twld-overflow-x-auto twld-h-full twld-mt-10 twld-m-auto siuuu" style="width: 97%;">
    @foreach ( $data as $b )
    <div class="twld-w-96 twld-flex-none twld-bg-zinc-300 twld-border twld-border-gray-200 twld-rounded-lg twld-shadow twld-dark:bg-gray-800 twld-dark:border-gray-700 twld-mx-auto twld-mr-4">
        <div class="twld-flex twld-justify-center">
            <a href="/detail/{{ $b->kode_buku }}">
                <img class="twld-p-8 twld-w-60 twld-h-auto twld-rounded-lg" src="images/{{ $b->foto }}" alt="{{ $b->judul }}" />
            </a>
        </div>
        <div class="twld-px-5 twld-pb-5">
            <span class="twld-text-3xl twld-font-bold twld-text-gray-900 twld-dark:text-white">{{ $b->judul }}</span>
            <div class="twld-flex twld-items-center twld-justify-between">
            </div>      
            <h5 class="twld-text-xl twld-font-semibold twld-tracking-tight twld-text-gray-900 twld-dark:text-white">{{ $b->penulis }}</h5>
            <div class="twld-mt-3">
                <a href="/detail/{{ $b->kode_buku }}" class="twld-text-white twld-bg-gradient-to-r twld-from-green-400 twld-via-green-500 twld-to-green-600 hover:twld-bg-gradient-to-br twld-focus:ring-4 twld-focus:outline-none twld-focus:ring-green-300 twld-dark:focus:ring-green-800 twld-shadow-lg twld-shadow-green-500/50 twld-dark:shadow-lg twld-dark:shadow-green-800/80 twld-font-medium twld-rounded-lg twld-text-base twld-px-3 twld-py-1.5 twld-text-center twld-me-1 twld-mb-1">
                    Detail
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <div class="twld-container twld-mx-auto twld-px-4 twld-mt-4">
        <a href="/home" class="twld-inline-block twld-bg-blue-500 twld-text-white twld-px-4 twld-py-2 twld-rounded twld-transition twld-duration-300 twld-ease-in-out hover:twld-bg-blue-700">Kembali</a>
    </div>
@endsection