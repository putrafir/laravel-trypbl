@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url('{{ asset('img/pendaftar.png') }}')">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>




    <!-- konten -->
    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        @include('layouts.cardDetail')

    </main>
@endsection
