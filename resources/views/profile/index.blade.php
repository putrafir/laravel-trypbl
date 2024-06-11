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
    {{-- <script>
        document.querySelector('.fa-camera').addEventListener('click', function() {
            document.querySelector('.file-input').click();
        });
    </script> --}}
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
