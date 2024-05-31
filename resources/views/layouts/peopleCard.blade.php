{{-- <div class="grid grid-cols-6">
    <div class=" w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
        <img src="{{ $pendaftar->pasFoto }}" alt="profil" class="w-[66px] py-2 px-2" />
        <h2 class="font-semibold pl-4 text-dark mt-6">
            {{ $pendaftar->namaLengkap }}
        </h2>
        <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">{{ $pendaftar->nisn }}</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">{{ $pendaftar->jenisKelamin }}</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">{{ $pendaftar->kota }}</h2>
        </div>

        <a class="-mt-12" href="/pendaftars/{{ $pendaftar->nisn }}">
            <button name="lihat" type="submit"
                class="text-white h-7  bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
            </button>
        </a>
    </div>
</div> --}}

<div class="relative overflow-x-auto shadow-md sm:rounded-2xl mt-4 mr-8">

    @csrf
    <div
        class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        @if (Request::is('accepted/*'))
            <div class="pl-3 mt-3">
                <a href="{{ route('dress') }}"
                    class="flex gap-1 border border-gray-300 hover:bg-gray-100 text-gray-500 rounded-xl py-2 px-4">
                    <svg class=" transition duration-75 " width="20" height="20" viewBox="0 0 48 48"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path
                            d="M20.059 43.9035L17.9882 43.429C16.2887 42.8753 14.8948 41.972 13.7353 40.5938C12.7534 39.4265 13.0287 39.4374 13.0273 37.9411L13.001 33.8965L12.5227 36.8951C12.3905 37.6846 12.2013 38.4657 11.9944 39.2385C11.7603 40.113 11.6032 40.4621 11.601 41.3932L11.6001 42.8511C11.6003 44.4812 11.2822 44.229 9.89038 44.2299H6.51341C6.03434 44.2307 5.6773 44.2959 5.37973 43.8279C5.26475 43.6471 5.34406 40.7057 5.33094 40.2391C5.31969 39.837 5.22167 39.4268 5.18839 39.0238L5.13322 38.2035C5.11972 38.0584 5.09277 37.9154 5.08494 37.7696L4.99489 36.1878L4.98828 29.0383L5.07514 26.3096C5.09103 25.9882 5.14377 25.6698 5.15361 25.348C5.17963 24.4976 5.21769 23.7214 5.26944 22.8753L5.38189 21.4794C5.58959 19.061 5.84286 16.6351 6.39842 14.2675C6.89591 12.1473 7.55352 10.39 9.53408 9.23275C10.7647 8.51378 12.2454 8.28784 13.6094 7.93492L16.8784 7.11662C16.9723 7.09356 17.7612 6.93864 17.7767 6.92701C17.7872 6.91904 17.822 6.74997 17.8275 6.72831C17.9884 6.09409 18.2945 5.49592 18.5615 4.90229C19.0048 3.91673 18.9549 3.84443 19.9779 3.84751L25.4475 3.8492C26.4004 3.84872 27.3314 3.87696 28.2802 3.78358C28.7604 3.74561 29.0452 4.03932 29.2504 4.44175L29.9439 6.08603C30.2507 6.78184 29.9773 6.87029 30.6459 7.01575L34.3277 7.93239C37.7364 8.75345 39.9223 9.12447 41.1562 12.7269C41.3303 13.235 41.4761 13.753 41.5881 14.2787L41.8604 15.6097C41.9252 15.9054 41.9456 16.2152 42.0009 16.5121L42.514 20.2447L42.8138 23.7827C42.8573 24.2873 42.9063 24.898 42.9242 25.4044L43.0034 27.9888C43.0103 28.1346 43.0348 28.2787 43.0392 28.4249L42.9899 36.3303C42.9826 36.4752 42.952 36.6175 42.9441 36.7621L42.694 39.7035C42.6464 40.0616 42.674 40.4435 42.6741 40.8062L42.6759 42.8349C42.6767 43.2988 42.7988 43.8331 42.3332 44.1206L42.2012 44.1954C42.0797 44.2496 41.9127 44.2294 41.781 44.2296L37.1249 44.2302C36.1992 44.2297 36.1811 43.8395 36.1817 42.9799C36.182 42.5696 36.2404 40.3733 36.139 40.1507C36.0576 39.9722 36.022 39.8016 35.9736 39.6139L35.2862 36.0953L34.972 33.8816C34.914 34.4349 34.9439 34.9952 34.9447 35.551L34.946 39.1088C34.9456 39.3033 34.9666 39.5122 34.891 39.6951L34.8775 39.7269C34.7798 39.9734 34.5965 40.1813 34.4305 40.3853C32.6532 42.5692 30.4447 43.5436 27.7279 43.9734L25.1718 44.2189C23.4674 44.2824 21.7429 44.1731 20.059 43.9035ZM21.0648 5.18486C21.3692 5.35717 21.6494 5.59051 21.9465 5.78026L23.2329 6.5365C23.4757 6.68289 23.7434 6.87793 24.0033 6.98256L25.8424 5.89164L26.9249 5.20539L21.0648 5.18486ZM19.6677 5.54612C19.3977 6.02176 18.8658 7.108 18.923 7.68329C19.0213 8.67161 19.4962 10.0184 20.4598 10.4473L20.728 10.537C21.2361 10.6775 21.6334 10.3822 21.9294 9.99203C22.4663 9.35978 22.8684 8.67376 23.2701 7.95133L22.2047 7.42333C21.2732 6.90423 20.4318 6.28829 19.6677 5.54612ZM28.3436 5.56933C27.2111 6.60967 26.2004 7.25031 24.7878 7.91931C25.0181 8.6949 25.5356 9.58783 26.0671 10.2065C26.2249 10.3879 26.393 10.5723 26.6367 10.6195L26.6668 10.6259C27.9745 10.8857 28.8738 8.87781 29.0642 7.86714L29.0922 7.66567C29.1679 7.14957 28.5635 6.02017 28.3436 5.56933ZM17.6742 8.21518L13.0229 9.38533C9.51059 10.279 8.42408 10.8595 7.56453 14.7191L7.22722 16.3462L6.65759 20.8128L6.32408 25.6385C6.31255 25.8064 6.27852 25.9675 6.27097 26.1382L6.18378 29.1935L6.18477 34.9035C6.19067 35.1466 6.23966 35.3839 6.24566 35.6273L6.29764 37.7671C6.33884 38.2131 6.32 38.953 6.40512 39.2931L10.7488 39.3015L11.9906 33.0029C12.5 30.3262 12.8325 28.138 12.7342 25.3949L12.6923 24.8792C12.6688 24.3346 12.7171 23.762 12.6434 23.2222L12.0967 17.2686C12.0529 16.8304 11.9974 16.4008 12.0047 15.9585C12.0151 15.3271 12.8339 15.086 13.1266 15.6917L13.1392 15.7156C13.2102 15.8581 13.197 16.0756 13.214 16.2347L13.3111 17.186C13.3317 17.4212 13.3758 17.6515 13.3856 17.8884L13.8451 22.9781L14.0694 26.6904C14.0768 26.8027 14.1051 26.9079 14.1163 27.0181C14.1874 27.7224 14.0795 28.4652 14.2089 29.1551C14.2649 29.4535 14.242 29.7887 14.2433 30.0926L14.2416 38.5357C14.232 39.2821 14.2037 39.197 14.6642 39.7465C15.6766 40.9545 17.0423 41.8295 18.5507 42.2819L19.9197 42.625C20.2555 42.7165 20.6315 42.7445 20.9765 42.7819L23.0086 42.9398C23.051 42.9417 23.1286 42.9556 23.1639 42.9356L23.1681 11.5802C23.1673 11.2558 23.2174 10.8099 23.1085 10.5075C22.6364 11.0381 22.2851 11.5692 21.5624 11.7685L21.5203 11.7806C19.8326 12.2369 18.3094 10.4748 17.9347 8.98384L17.7721 8.21518C17.7185 8.1925 17.7258 8.19958 17.6742 8.21518ZM30.255 8.21954C30.1578 8.56276 30.0961 8.90706 29.9789 9.24634C29.4713 10.7148 27.92 12.3187 26.215 11.8317C25.4587 11.6157 24.7339 10.6271 24.3846 9.96086L24.3663 42.927C27.965 42.8424 31.1844 42.5448 33.6106 39.3971C33.7636 39.1987 33.744 39.1716 33.7478 38.9189L33.7527 31.8676C33.7536 31.6098 33.737 31.3319 33.7837 31.0783C33.8869 30.52 33.8333 29.909 33.862 29.3433L33.9807 27.6759C33.9907 27.5417 34.0155 27.4105 34.0202 27.2755L34.0355 24.4188C34.044 24.1037 34.0937 23.7907 34.1105 23.4754L34.1516 22.1954L34.4247 18.9134C34.4652 18.1969 34.5773 17.4713 34.6707 16.7598C34.719 16.3921 34.6767 15.8456 34.9886 15.5796L35.0613 15.5222C35.4812 15.1946 35.9697 15.5673 35.9512 16.1528C35.9388 16.5482 35.8712 16.9636 35.8145 17.3558L35.3054 23.7479L35.2998 26.6937L35.5378 30.2729L36.1412 33.6683C36.1692 33.8077 36.1726 33.9522 36.1984 34.092L36.6108 36.3988C36.6365 36.5312 36.6417 36.6677 36.6679 36.8L37.1025 38.9731C37.1245 39.0888 37.1221 39.1927 37.1803 39.2974L41.5524 39.2966L41.843 35.1969C41.8613 34.8407 41.9122 34.4937 41.9197 34.1354L41.911 29.613C41.9036 29.421 41.8498 29.2348 41.8442 29.0394L41.8255 27.6058L41.444 21.8576L40.5308 15.2112C39.677 11.0048 38.6947 10.2692 34.8485 9.34272L31.5511 8.54223C31.1224 8.43475 30.6766 8.34868 30.255 8.21954ZM6.55245 40.5691L6.53713 42.1091C6.53722 42.377 6.51411 42.6707 6.54678 42.9354L10.4179 42.9415L10.4252 41.291C10.4249 41.0634 10.4525 40.7954 10.4148 40.5747L6.55245 40.5691ZM37.4304 40.579C37.3783 41.0671 37.3787 42.4248 37.4325 42.9101L41.3554 42.917L41.4058 42.9082C41.4116 42.6405 41.4441 40.68 41.3871 40.578L37.4304 40.579Z" />
                        <path
                            d="M31.9164 17.3202L27.2059 17.3198C27.0239 17.3196 26.7169 17.36 26.5585 17.2722L26.5316 17.2565C26.1461 17.036 25.9877 16.5274 26.3596 16.2212L26.391 16.1959C26.6555 15.9782 26.9214 16.0439 27.2468 16.0418L31.9202 16.0394C32.1152 16.0393 32.3918 16.0041 32.571 16.0809C33.09 16.3034 33.116 16.9748 32.6306 17.2379C32.415 17.3548 32.1541 17.3222 31.9164 17.3202Z" />
                    </svg>
                    <span class=" text-sm">Ukuran baju</span>
                </a>
            </div>
        @else
            <span></span>
        @endif

        <form action="/pendaftar">
            <label for="table-search" class="sr-only">Search</label>
            <div class=" relative pt-3 pr-3 ">
                <div class="absolute pt-3 inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input name="search" type="text" id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users" value="{{ request('search') }}">
            </div>
        </form>

    </div>

    <form action="/pendaftar" method="POST">
        @csrf

        @if (Request::is('pendaftar'))
            <div class="pl-3 absolute -mt-12">

                <button type="submit"
                    class="flex gap-1 border border-gray-300 hover:bg-gray-100 text-gray-500 rounded-xl py-2 px-4">
                    <span class=" text-sm">Terima semua</span>

                </button>
            </div>
        @endif

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-dark uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @if (Request::is('pendaftar'))
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                    @endif

                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nisn
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($pendaftars->count())
                    @foreach ($pendaftars as $pendaftar)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            @if (Request::is('pendaftar'))
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input name="ids[]" value="{{ $pendaftar->id }}" id="checkbox-table-search-1"
                                            type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                            @endif
                            <th scope="row"
                                class="flex items-center px-6 py-4  text-dark whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                    alt="Jese image">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $pendaftar->namaLengkap }}</div>
                                    <div class="font-normal text-gray-500">{{ $pendaftar->email }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $pendaftar->nisn }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pendaftar->jenisKelamin }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pendaftar->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="text-white  py-2 px-3  bg-blueFist font-medium rounded-full text-[10px] hover:bg-bluSecond"
                                    href="/pendaftars/{{ $pendaftar->nisn }}">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div id="popup-modal" tabindex="-1"
                        class=" overflow-y-auto overflow-x-hidde mx-[25%] top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class=" p-4 w-full max-w-md max-h-full">
                            <div class=" bg-white rounded-lg shadow dark:bg-gray-700">

                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ups! Ternyata
                                        belum
                                        ada yang mendaftar, Ingin menambahkan?</h3>
                                    <a href="/addPendaftar" data-modal-hide="popup-modal"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Tambahkan
                                    </a>
                                    <button data-modal-hide="popup-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </tbody>
        </table>
    </form>
</div>
