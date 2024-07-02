@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url(../../img/dress.png)">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        <div class="relative inline-block">
            <i class="fas fa-camera text-2xl  cursor-pointer"></i>
            <input type="file" class="file-input" accept="image/*">

        </div>


        <script>
            document.querySelector('.fa-camera').addEventListener('click', function() {
                document.querySelector('.file-input').click();
            });
        </script>

        <!-- Dropdown menu -->
    @endsection
