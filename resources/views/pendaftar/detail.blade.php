@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url('{{ asset('img/pendaftar.png') }}')">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    </div>


    <!-- konten -->
    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        @include('layouts.cardDetail')

    </main>

    <script>
        // Script untuk mengaktifkan tab dan mengatur lebar garis indikator
        const tabs = document.querySelectorAll("button[data-target]");
        const allContent = document.querySelectorAll(".content");

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", (e) => {
                tabs.forEach((tab) => {
                    tab.classList.remove("active");
                });

                tab.classList.add("active");

                var line = document.querySelector(".line");
                line.style.width = e.target.offsetWidth + "px";
                line.style.left = e.target.offsetLeft + "px";

                allContent.forEach((content) => {
                    content.classList.remove("active");
                });
                const target = tab.getAttribute("data-target");
                document.getElementById(target).classList.add("active");
            });
        });
    </script>
@endsection
