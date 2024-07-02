@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url('{{ asset('img/pendaftar.png') }}')">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>


    <main class="-mt-[390px] ml-80 h-full max-h-screen">

        @include('partials.pages')


        <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div
                class="w-[68rem] mt-4 h-[6rem] justify-between py-[1.4rem] bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <input type="hidden" name="oldProfileImage" value="{{ $user->profileImage }}">
                    <div class="flex pl-4 gap-4">
                        {{-- <img class="w-14 h-14 object-cover  rounded-full shadow-lg" src="" alt="Bonnie image" /> --}}
                        <div class="relative inline-block">
                            @if ($user->profileImage)
                                <img id="profile-picture"
                                    class="w-14 h-14 object-cover rounded-full shadow-lg cursor-pointer"
                                    src="{{ asset('storage/' . $user->profileImage) }}" alt="Profile Image" />
                            @else
                                <img id="profile-picture"
                                    class="w-14 h-14 object-cover rounded-full shadow-lg cursor-pointer"
                                    src="img/noneProfile.png" alt="Profile Image" />
                            @endif

                            <input type="file" name="profileImage" id="file-input" class="file-input hidden"
                                accept="image/*">
                        </div>
                        {{-- <div class=" absolute ml-9 mt-8  inline-block">
                        <i class="fas fa-camera text-2xl  cursor-pointer"></i>
                        <input type="file" class="file-input" accept="image/*">

                    </div> --}}

                        <div>
                            <h5 class=" text-xl font-medium text-gray-900 dark:text-white">{{ $user->namaLengkap }}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container pt-6">
                <div class="bg-white pb-6 w-[68rem] shadow-lg rounded-xl">


                    {{-- <hr class="pb-4 border-t-2 border-secondary opacity-25" /> --}}
                    <div class="contentBox px-6">
                        <!-- Data diri -->

                        <div class="content text-dark active" id="dataDiri">

                            <h5 class="text-secondary  pt-8 text-sm ">INFORMASI PENGGUNA</h5>

                            <div class="grid-cols-2 w-[60rem] mt-6 pb-2 grid gap-x-20">
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium">Nama lengkap</label>
                                    <input value="{{ old('namaLengkap', $user->namaLengkap) }}" id="namaLengkap"
                                        type="text" name="namaLengkap"
                                        class="@error('namaLengkap') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('namaLengkap')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label for="gender"
                                        class="block mb-2 text-sm font-medium  dark:text-white">Username</label>
                                    <input value="{{ old('username', $user->username) }}" id="username" type="text"
                                        name="username"
                                        class="@error('username') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('username')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Jabatan</label>
                                    <input value="{{ old('jabatan', $user->jabatan) }}" id="jabatan" type="text"
                                        name="jabatan"
                                        class="@error('jabatan') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('jabatan')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <h5 class="text-secondary pt-6 text-sm ">INFORMASI KONTAK</h5>

                            <div class="grid-cols-2 w-[60rem] mt-6 pb-2 grid gap-x-20">
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium">Alamat</label>
                                    <input value="{{ old('alamat', $user->alamat) }}" id="alamat" type="text"
                                        name="alamat"
                                        class="@error('alamat') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('alamat')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label for="gender" class="block mb-2 text-sm font-medium  dark:text-white">Alamat
                                        Email</label>
                                    <input value="{{ old('email', $user->email) }}" id="email" type="text"
                                        name="email"
                                        class="@error('email') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('email')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-5">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Nomer Telepon</label>
                                    <input value="{{ old('nomorTelepon', $user->nomorTelepon) }}" id="nomorTelepon"
                                        type="text" name="nomorTelepon"
                                        class="@error('nomorTelepon') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                    @error('nomorTelepon')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>

                    </div>
                    <button name="update" type="submit"
                        class="block mx-[45%] text-white bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update
                    </button>
                </div>
            </div>
        </form>


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
{{-- <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div> --}}
