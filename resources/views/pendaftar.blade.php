@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url(img/pendaftar.png)">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    </div>


    <!-- konten -->
    <main class="-mt-[390px] ml-80 h-full max-h-screen">

        @include('partials.pages')
        <div class="w-[68rem] h-full bg-white shadow-lg rounded-xl mt-8">
            <div class="w-full h-full">
                <h2 class="font-semibold p-7">Pendaftar</h2>
                <ol class="flex flex-wrap font-medium text-slate-400 text-sm">
                    <li class="pl-[10rem]">NAMA</li>
                    <li class="pl-[12rem]">NIM</li>
                    <li class="pl-[88px]">KELAMIN</li>
                    <li class="pl-[8rem]">ALAMAT</li>
                </ol>
                <hr class="mx-6 mt-5" />
                @if ($pendaftars->count())
                    @foreach ($pendaftars as $pendaftar)
                        @include('partials.peopleCard')
                    @endforeach
                @else
                    <p>Pendaftar tidak ditemukan.</p>
                @endif

            </div>
            <div class="mb-4"></div>
        </div>

    </main>
@endsection
