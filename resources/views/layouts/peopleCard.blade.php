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
    <form action="/pendaftar">
        @csrf
        <div
            class="flex items-center justify-end flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
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
        </div>
    </form>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-dark uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> --}}
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
                        {{-- <td class="w-4 p-4">
                <div class="flex items-center">
                    <input id="checkbox-table-search-1" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                </div>
            </td> --}}
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

                        </td>
                    </tr>
                @endforeach
            @else
                <div id="popup-modal" tabindex="-1"
                    class=" overflow-y-auto overflow-x-hidde mx-[25%] top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class=" p-4 w-full max-w-md max-h-full">
                        <div class=" bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ups! Ternyata
                                    belum
                                    ada yang mendaftar, Ingin menambahkan?</h3>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Tambahkan
                                </button>
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
</div>
