@extends('layouts.main')
{{-- <style>
    .file-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    } --}}
<style>
    .file-input {
        display: none;
    }
</style>
{{-- </style> --}}
@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url('{{ asset('img/pendaftar.png') }}')">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        <div
            class="w-[68rem] mt-4 h-[6rem] justify-between py-[1.4rem] bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex pl-4 gap-4">
                    {{-- <img class="w-14 h-14 object-cover  rounded-full shadow-lg" src="" alt="Bonnie image" /> --}}
                    <div class="relative inline-block">
                        <img id="profile-picture" class="w-14 h-14 object-cover rounded-full shadow-lg cursor-pointer"
                            src="img/noneProfile.png" alt="Profile Image" />
                        <input type="file" id="file-input" class="file-input" accept="image/*">
                    </div>
                    {{-- <div class=" absolute ml-9 mt-8  inline-block">
                        <i class="fas fa-camera text-2xl  cursor-pointer"></i>
                        <input type="file" class="file-input" accept="image/*">

                    </div> --}}


                    <div>
                        <h5 class=" text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
                    </div>

                </div>
                <div class="flex pr-4">
                    <div class="group ">
                        <a href="{{ route('profile.edit', $user) }}" onclick="changeColor()"
                            class="pr-3 pl-2 py-2 h-10 text-xs font-medium bg-orange-400 hover:bg-orange-500 text-white text-center inline-flex items-center rounded-xl">
                            <svg id="myIcon" width="24" height="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path id="myPath" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0096 7.75789C18.4001 8.14841 18.4001 8.78158 18.0096 9.1721L10.9396 16.2421C10.7521 16.4296 10.4977 16.535 10.2325 16.535C9.96729 16.535 9.71294 16.4296 9.5254 16.2421L5.9904 12.7071C5.59988 12.3166 5.59988 11.6834 5.9904 11.2929C6.38093 10.9024 7.01409 10.9024 7.40462 11.2929L10.2325 14.1208L16.5954 7.75789C16.9859 7.36737 17.6191 7.36737 18.0096 7.75789Z" />
                            </svg>
                            <span id="myButtonText"> Edit </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-6">
            <div class="bg-white w-[68rem] shadow-lg rounded-xl">


                {{-- <hr class="pb-4 border-t-2 border-secondary opacity-25" /> --}}
                <div class="contentBox px-6">
                    <!-- Data diri -->
                    <div class="content text-dark active" id="dataDiri">

                        <h5 class="text-secondary  pt-8 text-sm ">INFORMASI PENGGUNA</h5>


                        <div class="grid-cols-2 w-[60rem] mt-6 pb-2 grid gap-x-20">
                            <div class="mb-5">
                                <label for="nama" class="block mb-2 text-sm font-medium">Nama lengkap</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->name }}
                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium  dark:text-white">Username</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->username }}
                                </h5>
                            </div>

                            <div class="mb-5">
                                <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Jabatan</label>
                                <h5 name="tanggalLahir" type="tanggalLahir" id="repeat-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->jabatan ?? '........' }}
                                </h5>
                            </div>

                        </div>

                        <h5 class="text-secondary pt-6 text-sm ">INFORMASI KONTAK</h5>

                        <div class="grid-cols-2 w-[60rem] mt-6 pb-2 grid gap-x-20">
                            <div class="mb-5">
                                <label for="nama" class="block mb-2 text-sm font-medium">Alamat</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->alamat ?? '........' }}
                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="gender" class="block mb-2 text-sm font-medium  dark:text-white">Alamat
                                    Email</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->email }}
                                </h5>
                            </div>

                            <div class="mb-5">
                                <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Nomer Telepon</label>
                                <h5 name="tanggalLahir" type="tanggalLahir" id="repeat-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $user->nomerTelepon ?? '........' }}
                                </h5>
                            </div>


                        </div>
                    </div>
                    <!-- Data Orang Tua -->

                </div>
            </div>
        </div>


    </main>

    <script>
        const profilePicture = document.getElementById('profile-picture');
        const fileInput = document.getElementById('file-input');

        profilePicture.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    profilePicture.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection


{{-- modal image --}}
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
