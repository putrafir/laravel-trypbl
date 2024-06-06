@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url(img/pendaftar.png)">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        <div class="container pt-6">

            <div class="bg-white w-[68rem] shadow-lg rounded-xl">
                <div class="category flex font-semibold relative text-secondary gap-12 w-full py-4 px-6">
                    <button class="active" data-target="dataDiri">Data Diri Calon</button>
                    <button data-target="dataOrangTua">Data Orang Tua</button>
                    <button data-target="asalSekolah">Asal Sekolah</button>
                    <button data-target="berkas">Berkas</button>
                    <div class="line absolute bg-blueFist rounded-full transition-all duration-300 ease-in-out"></div>
                </div>
                <hr class="pb-4 border-t-2 border-secondary opacity-25" />
                <div class="contentBox px-6">
                    @include('partials.alert.succesAlert')
                    <form class="max-w-sm mt-6 pb-7" method="POST" action="/addPendaftar" enctype="multipart/form-data">
                        @csrf
                        <!-- Data diri -->

                        <div class="content text-dark active" id="dataDiri">


                            <div class="grid-cols-2 w-[60rem] grid gap-x-20">

                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Nama lengkap</label>
                                    <input value="{{ old('namaLengkap') }}" id="namaLengkap" type="text"
                                        name="namaLengkap"
                                        class="@error('namaLengkap') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('namaLengkap')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium  dark:text-white">Jenis
                                        Kelamin</label>
                                    <select value="{{ old('namaLengkap') }}" id="gender"
                                        class="@error('jenisKelamin') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="jenisKelamin">
                                        <option value="" {{ old('jenisKelamin') == '' ? 'selected' : '' }} selected>
                                            Pilih
                                            Jenis Kelamin</option>
                                        <option value="laki-laki"
                                            {{ old('jenisKelamin') == 'laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="perempuan"
                                            {{ old('jenisKelamin') == 'perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                    @error('jenisKelamin')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                            <span class="font-medium">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Tanggal lahir</label>
                                    <div class="relative ">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker value="{{ old('tanggalLahir') }}" type="text"
                                            class="@error('tanggalLahir') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Select date" name="tanggalLahir">
                                        @error('tanggalLahir')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Alamat</label>
                                    <input value="{{ old('alamat') }}" name="alamat" type="alamat"
                                        class="@error('alamat') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('alamat')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Email</label>
                                    <input value="{{ old('email') }}" name="email" type="email"
                                        class="@error('email') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('email')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Kota/kabupaten</label>
                                    <input value="{{ old('kota') }}" name="kota" type="text" id="repeat-password"
                                        class="@error('kota') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('kota')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">NISN</label>
                                    <input value="{{ old('nisn') }}" name="nisn" type="text"
                                        class="@error('nisn') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('nisn')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Tempat lahir</label>
                                    <input value="{{ old('tempatLahir') }}" name="tempatLahir" type="text"
                                        id="tempatLahir"
                                        class="@error('tempatLahir') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('tempatLahir')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium  dark:text-white">Agama</label>
                                    <select value="{{ old('agama') }}" id="gender"
                                        class="@error('agama') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="agama">
                                        <option value=""{{ old('agama') == '' ? 'selected' : '' }} selected>Pilih
                                            Agama
                                        </option>
                                        <option value="islam" {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam
                                        </option>
                                        <option value="kristen" {{ old('agama') == 'kristen' ? 'selected' : '' }}>Kristen
                                        </option>
                                        <option value="budha" {{ old('agama') == 'budha' ? 'selected' : '' }}>Budha
                                        </option>
                                    </select>
                                    @error('agama')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Provinsi</label>
                                    <input value="{{ old('provinsi') }}" name="provinsi" type="text" id="provinsi"
                                        class="@error('provinsi') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('provinsi')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium">Telepon</label>
                                    <input value="{{ old('telepon') }}" name="telepon" type="text" id="telepon"
                                        class="@error('telepon') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />

                                    @error('telepon')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Data Orang Tua -->
                        <div class="content text-dark" id="dataOrangTua">
                            <div class="max-w-sm mt-6 pb-2">
                                <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Nama ayah</label>
                                        <input value="{{ old('namaAyah') }}" name="namaAyah" type="text"
                                            id="nama"
                                            class="@error('namaAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('namaAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">NIK ayah</label>
                                        <input value="{{ old('nikAyah') }}" name="nikAyah" type="text"
                                            id="gender"
                                            class="@error('nikAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('nikAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Pekerjaan
                                            ayah</label>
                                        <input value="{{ old('pekerjaanAyah') }}" name="pekerjaanAyah" type="text"
                                            id="repeat-password"
                                            class="@error('pekerjaanAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('pekerjaanAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Telepon ayah</label>
                                        <input value="{{ old('teleponAyah') }}" name="teleponAyah" type="text"
                                            id="alamat"
                                            class="@error('teleponAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('teleponAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Alamat
                                            ayah</label>
                                        <input value="{{ old('alamatAyah') }}" name="alamatAyah" type="text"
                                            id="repeat-password"
                                            class="@error('alamatAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('alamatAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Usia</label>
                                        <input value="{{ old('usiaAyah') }}" name="usiaAyah" type="text "
                                            class="@error('usiaAyah') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('usiaAyah')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Nama ibu</label>
                                        <input value="{{ old('namaIbu') }}" name="namaIbu" type="text"
                                            id="tempatLahir"
                                            class="@error('namaIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('namaIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">NIK ibu</label>
                                        <input value="{{ old('nikIbu') }}" name="nikIbu" type="text" id="agama"
                                            class="@error('nikIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('nikIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Pekerjaan ibu</label>
                                        <input value="{{ old('pekerjaanIbu') }}" name="pekerjaanIbu" type="text"
                                            id="provinsi"
                                            class="@error('pekerjaanIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('pekerjaanIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Telepon ibu</label>
                                        <input value="{{ old('teleponIbu') }}" name="teleponIbu" type="text"
                                            id="telepon"
                                            class="@error('teleponIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('teleponIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Alamat ibu</label>
                                        <input value="{{ old('alamatIbu') }}" name="alamatIbu" type="text"
                                            id="provinsi"
                                            class="@error('alamatIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('alamatIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Usia</label>
                                        <input value="{{ old('usiaIbu') }}" name="usiaIbu" type="text"
                                            id="telepon"
                                            class="@error('usiaIbu') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />

                                        @error('usiaIbu')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Asal Sekolah -->
                        <div class="content text-dark" id="asalSekolah">
                            <div class="max-w-sm mt-6 pb-2">
                                <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Provinsi SMP</label>
                                        <input value="{{ old('provinsiSMP') }}" id="provinsiSMP" name="provinsiSMP"
                                            type="text" autocomplete="off"
                                            class="@error('provinsiSMP') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('provinsiSMP')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Kota/kabupaten
                                            SMP</label>
                                        <input value="{{ old('kotaSMP') }}" type="text" id="gender"
                                            name="kotaSMP"
                                            class="@error('kotaSMP') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('kotaSMP')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Asal SMP</label>
                                        <input value="{{ old('asalSMP') }}" type="text" id="asalSMP"
                                            name="asalSMP"
                                            class="@error('asalSMP') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('asalSMP')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium">Alamat SMP</label>
                                        <input value="{{ old('alamatSMP') }}" type="text" id="alamat"
                                            name="alamatSMP"
                                            class="@error('alamatSMP') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                        @error('alamatSMP')
                                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                <span class="font-medium">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Berkas -->
                        <div class="content ml-4 text-dark" id="berkas">
                            <div class="pt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900">IJAZAH/SKL
                                    SMP</label>
                                <input type="file" accept=".pdf,.docx, .png, .jpg, .jpeg" id="berkas"
                                    name="ijazah"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                    id="file_input" type="file" />
                                <div
                                    class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                                    <label for="file_input" type="file"
                                        class="flex justify-center my-3 text-sm font-medium">Pilih
                                        File</label>
                                </div>
                                @error('ijazah')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        <span class="font-medium">{{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="pt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">PAS
                                    FOTO</label>
                                <input type="file" accept=".jpg, .jpeg, .png" id="foto" name="pasFoto"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                    id="file_input" type="file" />
                                <div
                                    class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                                    <label for="file_input" type="file"
                                        class="flex justify-center my-3 text-sm font-medium">Pilih
                                        File</label>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">KARTU
                                    KELUARGA</label>
                                <input type="file" accept=".jpg, .jpeg, .png" id="foto" name="kartuKeluarga"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                    id="file_input" type="file" />
                                <div
                                    class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                                    <label for="file_input" type="file"
                                        class="flex justify-center my-3 text-sm font-medium">Pilih
                                        File</label>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">AKTA
                                    KELAHIRAN</label>
                                <input type="file" accept=".jpg, .jpeg, .png" id="foto" name="aktaKelahiran"
                                    class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                    id="file_input" type="file" />
                                <div
                                    class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                                    <label for="file_input" type="file"
                                        class="flex justify-center my-3 text-sm font-medium">Pilih
                                        File</label>
                                </div>
                            </div>


                            <button name="upload" type="submit"
                                class="block mt-6 mx-[40%] text-white bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Upload
                            </button>
                            {{-- <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="block mt-6 mx-[40%] text-white bg-blueFist hover:bg-blueFist focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Upload
                            </button> --}}


                        </div>

                    </form>
                </div>
            </div>
        </div>
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
