@extends('layouts.main')


@section('container')
    <div class="w-full h-[26rem] min-h-75 bg-blueFist">

    </div>
    <!-- Side samping -->

    <!-- konten -->
    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')


        <!-- konten atas -->
        <div class="grid grid-cols-3">
            <!-- isi kotak -->

            <div class="w-[16rem] h-[11rem] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
                <div class="w-full h-full flex flex-wrap">
                    <div class="p-5 lg:w-1/2">
                        <h2 class="font-semibold text-secondary text-[1.3rem]">
                            Pendaftar
                        </h2>
                        <h1 class="text-2xl text-dark font-bold pt-1">{{ $jumlahPendaftar }}</h1>
                    </div>

                    <div class="lg:w-1/2 pl-[3rem] pt-4">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="27.7275" cy="28.2606" rx="27.5439" ry="27.4709" fill="#1068FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.5 21.25C25.2771 21.25 23.475 23.0129 23.475 25.1875C23.475 27.3621 25.2771 29.125 27.5 29.125C29.7229 29.125 31.525 27.3621 31.525 25.1875C31.525 23.0129 29.7229 21.25 27.5 21.25ZM25.775 30.25C23.2345 30.25 21.175 32.2647 21.175 34.75C21.175 35.9926 22.2047 37 23.475 37H31.525C32.7953 37 33.825 35.9926 33.825 34.75C33.825 32.2647 31.7655 30.25 29.225 30.25H25.775Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M33.6172 26.7665C33.7528 26.2625 33.825 25.7332 33.825 25.1875C33.825 22.7933 32.435 20.7167 30.4014 19.6879C31.0483 19.2539 31.8313 19 32.675 19C34.8979 19 36.7 20.7629 36.7 22.9375C36.7 24.7947 35.3856 26.3516 33.6172 26.7665ZM36.125 34.75H36.7C37.9703 34.75 39 33.7426 39 32.5C39 30.0147 36.9405 28 34.4 28H33.1353C32.9781 28.3009 32.7965 28.5875 32.5929 28.8573C34.7005 30.0126 36.125 32.2186 36.125 34.75Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.3 22.9375C18.3 20.7629 20.1021 19 22.325 19C23.1687 19 23.9517 19.2539 24.5986 19.6879C22.565 20.7167 21.175 22.7933 21.175 25.1875C21.175 25.7332 21.2472 26.2625 21.3828 26.7665C19.6144 26.3516 18.3 24.7947 18.3 22.9375ZM21.8647 28H20.6C18.0595 28 16 30.0147 16 32.5C16 33.7426 17.0297 34.75 18.3 34.75H18.875C18.875 32.2186 20.2995 30.0126 22.4071 28.8573C22.2035 28.5875 22.0219 28.3009 21.8647 28Z"
                                fill="white" />
                        </svg>

                    </div>

                    <div class="text-lg -mt-7">
                        <h5 class="pl-5 pr-3 float-left font-medium text-green-400">
                            +{{ $pendaftarHariIni }}
                        </h5>
                        <p class="ml-5 text-secondary font-light">telah bertambah hari ini</p>
                    </div>
                </div>
            </div>

            <!-- kolom2 -->
            <div class="w-[16rem] h-[11rem] -ml-[6rem] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
                <div class="w-full h-full flex flex-wrap">
                    <div class="p-5 lg:w-1/2">
                        <h2 class="font-semibold text-secondary text-[1.3rem]">
                            Diterima
                        </h2>
                        <h1 class="text-2xl text-dark font-bold pt-1">{{ $jumlahDiterima }}</h1>
                    </div>

                    <div class="lg:w-1/2 pl-[3rem] pt-4">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="27.7275" cy="28.2606" rx="27.5439" ry="27.4709" fill="#1068FF" />
                            <rect width="29" height="29" transform="translate(13 14)" fill="#1068FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.0362 16.2963C19.768 16.2963 18.7399 17.3244 18.7399 18.5926V19.7408C18.1058 19.7408 17.5918 20.2548 17.5918 20.8889C17.5918 21.523 18.1058 22.0371 18.7399 22.0371V23.1852C18.1058 23.1852 17.5918 23.6993 17.5918 24.3334C17.5918 24.9675 18.1058 25.4815 18.7399 25.4815V26.6297C18.1058 26.6297 17.5918 27.1437 17.5918 27.7778C17.5918 28.4119 18.1058 28.926 18.7399 28.926V30.0741C18.1058 30.0741 17.5918 30.5881 17.5918 31.2223C17.5918 31.8564 18.1058 32.3704 18.7399 32.3704V33.5185C18.1058 33.5185 17.5918 34.0326 17.5918 34.6667C17.5918 35.3008 18.1058 35.8148 18.7399 35.8148V36.963C18.7399 38.2312 19.768 39.2593 21.0362 39.2593H33.6659C34.9341 39.2593 35.9622 38.2312 35.9622 36.963V18.5926C35.9622 17.3244 34.9341 16.2963 33.6659 16.2963H21.0362ZM24.4807 25.4815C24.4807 23.5792 26.0228 22.0371 27.9251 22.0371C29.8274 22.0371 31.3696 23.5792 31.3696 25.4815C31.3696 27.3838 29.8274 28.926 27.9251 28.926C26.0228 28.926 24.4807 27.3838 24.4807 25.4815ZM23.3325 33.5185C23.3325 31.6162 24.8747 30.0741 26.777 30.0741H29.0733C30.9756 30.0741 32.5177 31.6162 32.5177 33.5185C32.5177 34.1527 32.0037 34.6667 31.3696 34.6667H24.4807C23.8466 34.6667 23.3325 34.1527 23.3325 33.5185Z"
                                fill="white" />
                        </svg>


                    </div>


                    <div class="text-lg -mt-7">
                        <h5 class="pl-5 pr-3 float-left font-medium text-green-400">
                            +{{ $pendaftarDiterimaHariIni }}
                        </h5>
                        <p class="ml-5 text-secondary font-light">telah diterima hari ini</p>
                    </div>
                </div>

                <!-- kolom 3 -->
            </div>
            {{-- <div class="w-[19rem] h-[11rem] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
                <div class="w-full h-full flex flex-wrap">
                    <div class="p-5 lg:w-1/2">
                        <h2 class="font-semibold text-secondary text-[1.3rem]">
                            Ditolak
                        </h2>
                        <h1 class="text-2xl font-bold pt-1">102</h1>
                    </div>

                    <div class="lg:w-1/2 pl-20 pt-4">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="27.7255" cy="28.1511" rx="27.5439" ry="27.4709"
                                fill="url(#paint0_linear_818_6696)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.2295 27.2035C25.8753 27.2035 23.9668 25.3001 23.9668 22.9521C23.9668 20.6041 25.8753 18.7006 28.2295 18.7006C30.5838 18.7006 32.4923 20.6041 32.4923 22.9521C32.4923 25.3001 30.5838 27.2035 28.2295 27.2035Z"
                                stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M20.9062 35.7064C20.9062 32.4157 24.1886 29.7543 28.2296 29.7543C29.0481 29.7543 29.841 29.8649 30.5827 30.0689"
                                stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M36.2615 34.0569C36.0824 34.363 35.8522 34.6351 35.5879 34.8561C34.9912 35.3918 34.2068 35.7064 33.3457 35.7064C32.101 35.7064 31.0183 35.0432 30.43 34.0569C30.1146 33.5467 29.9355 32.943 29.9355 32.3053C29.9355 31.2339 30.43 30.2731 31.2144 29.6524C31.8026 29.1847 32.5443 28.9041 33.3457 28.9041C35.2299 28.9041 36.7559 30.4261 36.7559 32.3053C36.7559 32.943 36.5769 33.5467 36.2615 34.0569Z"
                                stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M35.8386 30.1614C36.0538 30.3767 36.0538 30.7257 35.8386 30.941L34.2795 32.5L35.8386 34.059C36.0538 34.2743 36.0538 34.6233 35.8386 34.8386C35.6233 35.0538 35.2743 35.0538 35.059 34.8386L33.5 33.2795L31.941 34.8386C31.7257 35.0538 31.3767 35.0538 31.1614 34.8386C30.9462 34.6233 30.9462 34.2743 31.1614 34.059L32.7205 32.5L31.1614 30.941C30.9462 30.7257 30.9462 30.3767 31.1614 30.1614C31.3767 29.9462 31.7257 29.9462 31.941 30.1614L33.5 31.7205L35.059 30.1614C35.2743 29.9462 35.6233 29.9462 35.8386 30.1614Z"
                                fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_818_6696" x1="55.2694" y1="47.7732" x2="5.0284"
                                    y2="0.547254" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4B7BC0" />
                                    <stop offset="1" stop-color="#3F5AC2" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="text-lg -mt-7">
                        <h5 class="pl-5 pr-3 float-left font-medium text-green-400">
                            +20%
                        </h5>
                        <p class="ml-5 text-secondary font-light">sejak minggu lalu</p>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- konten bawah -->
        <div class="grid grid-cols-2 pt-6">
            <div class="w-[32rem] h-[16rem] relative bg-white rounded-2xl shadow-lg p-4 md:p-6">
                <div class="flex justify-between mb-3">
                    <div class="flex">
                        <h5 class="text-3xl absolute pl-[240px] pt-[2.3rem] font-bold text-dark pe-1">
                            Perbandingan
                        </h5>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div id="donut-chart" data-alumni-mts='{{ $alumniMts }}' data-non-alumni-mts='{{ $nonAlumniMts }}'
                    class="-ml-10 -mt-3"></div>
            </div>

            <!-- kanan -->

            <div class="w-[500px] h-[499px] -mt-[200px] bg-white rounded-2xl shadow-lg">
                <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
                    <div>
                        <h5 class="leading-none text-3xl font-bold text-dark">
                            Data Perminggu
                        </h5>
                    </div>
                    <div
                        class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                        {{ number_format($lastWeekChangePercentage, 2) }}%
                        <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13V1m0 0L1 5m4-4 4 4" />
                        </svg>
                    </div>
                </div>
                <div id="labels-chart" class="px-2.5"></div>

            </div>
        </div>
    </main>

    <script>
        window.chartData = @json($dataPerWeek);
    </script>
@endsection
