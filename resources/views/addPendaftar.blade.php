<!-- Jangan lupa untuk memasukkan script JavaScript di sini -->

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
                    <form class="max-w-sm mt-6 pb-7" method="POST" enctype="multipart/form-data">
                        <!-- Data diri -->
                        <div class="content text-dark active" id="dataDiri">
                            <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium">Nama lengkap</label>
                                    <input id="nama" type="text" name="namaLengkap"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="gender" class="block mb-2 text-sm font-medium  dark:text-white">Jenis
                                        Kelamin</label>
                                    <select id="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Tanggal lahir</label>

                                    <div class="relative ">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Select date">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="alamat" class="block mb-2 text-sm font-medium">Alamat</label>
                                    <input name="alamat" type="alamat"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                                    <input name="email" type="email"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="repeat-password"
                                        class="block mb-2 text-sm font-medium">Kota/kabupaten</label>
                                    <input name="kota" type="text" id="repeat-password"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="block mb-2 text-sm font-medium">NISN</label>
                                    <input name="nisn" type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tempatLahir" class="block mb-2 text-sm font-medium">Tempat lahir</label>
                                    <input name="tempatLahir" type="tempatLahir" id="tempatLahir"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="gender"
                                        class="block mb-2 text-sm font-medium  dark:text-white">Agama</label>
                                    <select id="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected>Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="budha">Budha</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label for="provinsi" class="block mb-2 text-sm font-medium">Provinsi</label>
                                    <input name="provinsi" type="provinsi" id="provinsi"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="telepon" class="block mb-2 text-sm font-medium">Telepon</label>
                                    <input name="telepon" type="telepon" id="telepon"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />

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
                        <div class="content ml-4 text-dark" id="berkas">
                            <div class="pt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">IJAZAH/SKL
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
                                class="block mt-6 mx-[40%] text-white bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Upload
                            </button>
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
