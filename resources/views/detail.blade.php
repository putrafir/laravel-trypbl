@extends('layouts.main')

@section('container')
    <div class="w-full h-[26rem] min-h-75" style="background-image: url(img/pendaftar.png)">
        <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
    </div>

    </div>


    <!-- konten -->
    <main class="-mt-[390px] ml-80 h-full max-h-screen">
        @include('partials.pages')

        <div class="flex flex-col w-[68rem]">
            <div class="h-[6rem] mt-8 bg-white shadow-lg rounded-2xl">
                <div class="py-[13px] px-[13px] flex">
                    <img src="../../../img/profil/gua.pdf" class="" alt="profile" />
                    <div class="py-3 pl-[1rem] text-dark">
                        <h5 class="font-semibold pb-1">{{ $pendaftar->namaLengkap }}</h5>
                        <p class="text-[12px]">{{ $pendaftar->email }}</p>
                    </div>
                    <div class="absolute end-12 py-[16px] flex gap-1">
                        <div class="group">
                            <button id="tolak" onclick="changeColor1()" type="button"
                                class="px-3 py-2 h-10 text-xs font-medium text-center inline-flex items-center text-dark bg-dark bg-opacity-10 rounded-xl">
                                <svg id="tolakIcon" class="fill-dark" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="pathTolak" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.2426 7.75736C16.6332 8.14788 16.6332 8.78104 16.2426 9.17157L13.4142 12L16.2426 14.8284C16.6332 15.2189 16.6332 15.8521 16.2426 16.2426C15.8521 16.6332 15.219 16.6332 14.8284 16.2426L12 13.4142L9.17157 16.2426C8.78105 16.6332 8.14788 16.6332 7.75736 16.2426C7.36684 15.8521 7.36684 15.2189 7.75736 14.8284L10.5858 12L7.75736 9.17157C7.36684 8.78105 7.36684 8.14788 7.75736 7.75736C8.14788 7.36683 8.78105 7.36683 9.17157 7.75736L12 10.5858L14.8284 7.75736C15.219 7.36683 15.8521 7.36683 16.2426 7.75736Z" />
                                </svg>
                                <span id="buttonTolak"> Tolak </span>
                            </button>
                        </div>

                        <div class="group">
                            <button id="myButton" onclick="changeColor()" type="button"
                                class="px-3 py-2 h-10 text-xs font-medium text-center inline-flex items-center text-dark bg-dark bg-opacity-10 rounded-xl">
                                <svg id="myIcon" class="fill-dark" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="myPath" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.0096 7.75789C18.4001 8.14841 18.4001 8.78158 18.0096 9.1721L10.9396 16.2421C10.7521 16.4296 10.4977 16.535 10.2325 16.535C9.96729 16.535 9.71294 16.4296 9.5254 16.2421L5.9904 12.7071C5.59988 12.3166 5.59988 11.6834 5.9904 11.2929C6.38093 10.9024 7.01409 10.9024 7.40462 11.2929L10.2325 14.1208L16.5954 7.75789C16.9859 7.36737 17.6191 7.36737 18.0096 7.75789Z" />
                                </svg>
                                <span id="myButtonText"> Terima </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                    <!-- Data diri -->
                    <div class="content text-dark active" id="dataDiri">
                        <div class="grid-cols-2 w-[60rem] mt-6 pb-2 grid gap-x-20">
                            <div class="mb-5">
                                <label for="nama" class="block mb-2 text-sm font-medium">Nama lengkap</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->namaLengkap }}
                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="gender" class="block mb-2 text-sm font-medium  dark:text-white">Jenis
                                    Kelamin</label>
                                <h5 id="nama" type="text" name="namaLengkap"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->jenisKelamin }}
                                </h5>
                            </div>

                            <div class="mb-5">
                                <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Tanggal lahir</label>
                                <h5 name="tanggalLahir" type="tanggalLahir" id="repeat-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->tanggalLahir }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="alamat" class="block mb-2 text-sm font-medium">Alamat</label>
                                <h5 name="alamat" type="alamat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->alamat }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="repeat-password" class="block mb-2 text-sm font-medium">Kota/kabupaten</label>
                                <h5 name="kota" type="text" id="repeat-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->kota }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="password" class="block mb-2 text-sm font-medium">NISN</label>
                                <h5 name="nisn" type="text"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->nisn }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="tempatLahir" class="block mb-2 text-sm font-medium">Tempat lahir</label>
                                <h5 name="tempatLahir" type="tempatLahir" id="tempatLahir"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->tempatLahir }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium  dark:text-white">Agama</label>
                                <h5 name="tempatLahir" type="tempatLahir" id="tempatLahir"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->agama }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="provinsi" class="block mb-2 text-sm font-medium">Provinsi</label>
                                <h5 name="provinsi" type="provinsi" id="provinsi"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->provinsi }}

                                </h5>
                            </div>
                            <div class="mb-5">
                                <label for="telepon" class="block mb-2 text-sm font-medium">Telepon</label>
                                <h5 name="telepon" type="telepon" id="telepon"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    {{ $pendaftar->telepon }}

                                </h5>

                            </div>
                        </div>
                    </div>
                    <!-- Data Orang Tua -->
                    <div class="content text-dark" id="dataOrangTua">
                        <div class="max-w-sm mt-6 pb-2">
                            <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium">Nama ayah</label>
                                    <input name="namaAyah" type="text" id="nama"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                </div>
                                <div class="mb-5">
                                    <label for="gender" class="block mb-2 text-sm font-medium">NIK ayah</label>
                                    <input name="nikAyah" type="text" id="gender"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Pekerjaan
                                        ayah</label>
                                    <input name="pekerjaanAyah" type="tanggalLahir" id="repeat-password"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="alamat" class="block mb-2 text-sm font-medium">Telepon ayah</label>
                                    <input name="teleponAyah" type="text" id="alamat"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="repeat-password" class="block mb-2 text-sm font-medium">Alamat
                                        ayah</label>
                                    <input name="alamatAyah" type="text" id="repeat-password"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="block mb-2 text-sm font-medium">Usia</label>
                                    <input name="usiaAyah" type="text "
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tempatLahir" class="block mb-2 text-sm font-medium">Nama ibu</label>
                                    <input name="namaIbu" type="text" id="tempatLahir"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="agama" class="block mb-2 text-sm font-medium">NIK ibu</label>
                                    <input name="nikIbu" type="text" id="agama"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="provinsi" class="block mb-2 text-sm font-medium">Pekerjaan ibu</label>
                                    <input name="pekerjaanIbu" type="text" id="provinsi"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="telepon" class="block mb-2 text-sm font-medium">Telepon ibu</label>
                                    <input name="teleponIbu" type="text" id="telepon"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="provinsi" class="block mb-2 text-sm font-medium">Alamat ibu</label>
                                    <input name="alamatIbu" type="provinsi" id="provinsi"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="telepon" class="block mb-2 text-sm font-medium">Usia</label>
                                    <input name="usiaIbu" type="text" id="telepon"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Asal Sekolah -->
                    <div class="content text-dark" id="asalSekolah">
                        <div class="max-w-sm mt-6 pb-2">
                            <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium">Provinsi SMP</label>
                                    <input id="nama" name="provinsiSMP" type="text" autocomplete="off"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="gender" class="block mb-2 text-sm font-medium">Kota/kabupaten
                                        SMP</label>
                                    <input type="gender" id="gender" name="kotaSMP"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Asal SMP</label>
                                    <input type="tanggalLahir" id="repeat-password" name="asalSMP"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="alamat" class="block mb-2 text-sm font-medium">Alamat SMP</label>
                                    <input type="text" id="alamat" name="alamatSMP"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Berkas -->
                    <div class="content  text-dark" id="berkas">
                        <div class="grid grid-cols-2 gap-8 pt-6 px-20">
                            <div class=" relative h-80  bg-white shadow-lg border rounded-xl">
                                <h2 class="flex justify-center my-8 font-semibold">
                                    IJAZAH/SKL SMP
                                </h2>
                                <img class="w-[20rem] h-52 rounded-lg bottom-6 mx-[3.2rem] absolute" src=""
                                    alt="ijazah" onclick="openModal(this.src)" />
                            </div>
                            <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                                <h2 class="flex justify-center my-8 font-semibold">
                                    PAS FOTO
                                </h2>
                                <img class="w-[20rem] h-52 rounded-lg bottom-6 mx-[3.2rem] absolute"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""
                                    onclick="openModal(this.src)" />
                            </div>
                            <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                                <h2 class="flex justify-center my-8 font-semibold">
                                    KARTU KELUARGA
                                </h2>
                                <img class="w-[20rem] h-52 rounded-lg bottom-6 mx-[3.2rem] absolute"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""
                                    onclick="openModal(this.src)" />
                            </div>
                            <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                                <h2 class="flex justify-center my-8 font-semibold">
                                    AKTA KELAHIRAN
                                </h2>
                                <img class="w-[20rem] h-52 rounded-lg bottom-6 mx-[3.2rem] absolute"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""
                                    onclick="openModal(this.src)" />
                            </div>
                            <div class="pb-6"></div>
                        </div>
                    </div>

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
