@extends('layoutHome')
@section('title')
    {{ $data->judul }}
@endsection
@section('content')
    <div class="twld-flex twld-bg-zinc-300 twld-shadow-md twld-rounded-lg twld-p-4 twld-w-full twld-max-w-5xl twld-mt-8 twld-mx-auto twld-h-auto">
        <div class="twld-w-80 twld-h-96 twld-ml-5 twld-mr-5 twld-flex twld-mb-6 twld-mt-6 twld-justify-center">
            <img src="{{ asset('images/' . $data->foto) }}" alt="{{ $data->judul }}" class="twld-w-full twld-h-auto twld-rounded-lg">
        </div>
        <div class="twld-w-full text-center twld-mb-6 twld-mt-6">
            <h2 class="twld-text-2xl twld-font-semibold twld-text-black">Judul : {{ $data->judul }}</h2>
            <h2 class="twld-text-2xl twld-font-semibold twld-text-black">Penerbit : {{ $data->penerbit }}</h2>
            <h2 class="twld-text-2xl twld-font-semibold twld-text-black">Penulis : {{ $data->penulis }}</h2>
            <h2 class="twld-text-2xl twld-font-semibold twld-text-black">Tahun Terbit : {{ $data->tahun_terbit }}</h2>
            <p class="twld-text-sm twld-text-black twld-mb-4 twld-mt-6">Sipnosis : {{ $data->sipnosis }}</p>
        </div>
    </div>
    <div class="twld-container twld-mx-auto twld-px-4 twld-mt-4">
        <a href="/home" class="twld-inline-block twld-bg-blue-500 twld-text-white twld-px-4 twld-py-2 twld-rounded twld-transition twld-duration-300 twld-ease-in-out hover:twld-bg-blue-700">Kembali</a>
    </div>
@endsection
