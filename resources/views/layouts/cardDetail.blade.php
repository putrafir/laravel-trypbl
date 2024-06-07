<div
    class="w-[68rem] h-[6rem] justify-between py-[1.4rem]  bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">

    <div class="flex items-center justify-between">
        <div class="flex pl-4 gap-4">
            <img class="w-14 h-14 object-cover  rounded-full shadow-lg"
                src="{{ asset('storage/' . $pendaftar->berkas->pasFoto) }}" alt="Bonnie image" />
            <div>
                <h5 class=" text-xl font-medium text-gray-900 dark:text-white">{{ $pendaftar->namaLengkap }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $pendaftar->email }}</span>
            </div>
        </div>
        <div class="flex pr-4 gap-2">
            @if (Request::is('pendaftars/*'))
                <form id="rejectForm" action="{{ route('pendaftar.destroy', $pendaftar->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <div class="group">
                        <button id="tolakButton" onclick="showModal()" type="button"
                            class="pr-3 pl-2 py-2 h-10 text-xs font-medium text-center  bg-rose-400 hover:bg-rose-500  text-white inline-flex items-center rounded-xl">
                            <svg id="tolakIcon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path id="pathTolak" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.2426 7.75736C16.6332 8.14788 16.6332 8.78104 16.2426 9.17157L13.4142 12L16.2426 14.8284C16.6332 15.2189 16.6332 15.8521 16.2426 16.2426C15.8521 16.6332 15.219 16.6332 14.8284 16.2426L12 13.4142L9.17157 16.2426C8.78105 16.6332 8.14788 16.6332 7.75736 16.2426C7.36684 15.8521 7.36684 15.2189 7.75736 14.8284L10.5858 12L7.75736 9.17157C7.36684 8.78105 7.36684 8.14788 7.75736 7.75736C8.14788 7.36683 8.78105 7.36683 9.17157 7.75736L12 10.5858L14.8284 7.75736C15.219 7.36683 15.8521 7.36683 16.2426 7.75736Z" />
                            </svg>
                            <span id="buttonTolak"> Tolak </span>
                        </button>
                    </div>
                </form>
                <!-- Modal -->
                <div id="confirmationModal" class=" hidden fixed inset-0 z-50 flex items-center justify-center ">
                    <div class="bg-black bg-opacity-50 absolute inset-0"></div>
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin
                                    ingin menolak <span class=" font-semibold">{{ $pendaftar->namaLengkap }} ?</span>
                                </h3>
                                <button id="confirmButton" onclick="confirmReject()" data-modal-hide="popup-modal"
                                    type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Tolak
                                </button>
                                <button id="cancelButton" onclick="closeModal()" data-modal-hide="popup-modal"
                                    type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('pendaftar.accept') }}" method="POST">
                    <input type="hidden" name="ids[]" value="{{ $pendaftar->id }}">
                    @csrf
                    <div class="group ">
                        <button id="myButton" onclick="changeColor()" type="submit"
                            class="pr-3 pl-2 py-2 h-10 text-xs font-medium bg-teal-400 hover:bg-teal-500 text-white text-center inline-flex items-center rounded-xl">
                            <svg id="myIcon" width="24" height="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path id="myPath" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0096 7.75789C18.4001 8.14841 18.4001 8.78158 18.0096 9.1721L10.9396 16.2421C10.7521 16.4296 10.4977 16.535 10.2325 16.535C9.96729 16.535 9.71294 16.4296 9.5254 16.2421L5.9904 12.7071C5.59988 12.3166 5.59988 11.6834 5.9904 11.2929C6.38093 10.9024 7.01409 10.9024 7.40462 11.2929L10.2325 14.1208L16.5954 7.75789C16.9859 7.36737 17.6191 7.36737 18.0096 7.75789Z" />
                            </svg>
                            <span id="myButtonText"> Terima </span>
                        </button>
                    </div>
                </form>
            @else
                <div class="group ">
                    <a href="{{ route('diterima.edit', $pendaftar->nisn) }}" onclick="changeColor()"
                        class="pr-3 pl-2 py-2 h-10 text-xs font-medium bg-orange-400 hover:bg-orange-500 text-white text-center inline-flex items-center rounded-xl">
                        <svg id="myIcon" width="24" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path id="myPath" fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.0096 7.75789C18.4001 8.14841 18.4001 8.78158 18.0096 9.1721L10.9396 16.2421C10.7521 16.4296 10.4977 16.535 10.2325 16.535C9.96729 16.535 9.71294 16.4296 9.5254 16.2421L5.9904 12.7071C5.59988 12.3166 5.59988 11.6834 5.9904 11.2929C6.38093 10.9024 7.01409 10.9024 7.40462 11.2929L10.2325 14.1208L16.5954 7.75789C16.9859 7.36737 17.6191 7.36737 18.0096 7.75789Z" />
                        </svg>
                        <span id="myButtonText"> Edit </span>
                    </a>
                </div>
            @endif
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
                        <label for="gender" class="block mb-2 text-sm font-medium  dark:text-white">Agama</label>
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
                            <h5 for="nama" class="block mb-2 text-sm font-medium">Nama ayah</h5>
                            <h5 name="namaAyah" type="text" id="nama"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                {{ $pendaftar->parentDb->namaAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="gender" class="block mb-2 text-sm font-medium">NIK ayah</h5>
                            <h5 name="nikAyah" type="text" id="gender"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->nikAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="tanggalLahir" class="block mb-2 text-sm font-medium">Pekerjaan
                                ayah</h5>
                            <h5 name="pekerjaanAyah" type="tanggalLahir" id="repeat-password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->pekerjaanAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="alamat" class="block mb-2 text-sm font-medium">Telepon ayah</h5>
                            <h5 name="teleponAyah" type="text" id="alamat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->teleponAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="repeat-password" class="block mb-2 text-sm font-medium">Alamat
                                ayah</h5>
                            <h5 name="alamatAyah" type="text" id="repeat-password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->alamatAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="password" class="block mb-2 text-sm font-medium">Usia</h5>
                            <h5 name="usiaAyah" type="text "
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->usiaAyah }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="tempatLahir" class="block mb-2 text-sm font-medium">Nama ibu</h5>
                            <h5 name="namaIbu" type="text" id="tempatLahir"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->namaIbu }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="agama" class="block mb-2 text-sm font-medium">NIK ibu</h5>
                            <h5 name="nikIbu" type="text" id="agama"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->nikIbu }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="provinsi" class="block mb-2 text-sm font-medium">Pekerjaan ibu</h5>
                            <h5 name="pekerjaanIbu" type="text" id="provinsi"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->pekerjaanIbu }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="telepon" class="block mb-2 text-sm font-medium">Telepon ibu</h5>
                            <h5 name="teleponIbu" type="text" id="telepon"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->teleponIbu }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="provinsi" class="block mb-2 text-sm font-medium">Alamat ibu</h5>
                            <h5 name="alamatIbu" type="provinsi" id="provinsi"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->alamatIbu }} </h5>
                        </div>
                        <div class="mb-5">
                            <h5 for="telepon" class="block mb-2 text-sm font-medium">Usia</h5>
                            <h5 name="usiaIbu" type="text" id="telepon"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->parentDb->usiaIbu }} </h5>

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
                            <h5 id="nama" name="provinsiSMP" type="text" autocomplete="off"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->asalSekolah->provinsiSMP }}</h5>
                        </div>
                        <div class="mb-5">
                            <label for="gender" class="block mb-2 text-sm font-medium">Kota/kabupaten
                                SMP</label>
                            <h5 type="gender" id="gender" name="kotaSMP"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->asalSekolah->kotaSMP }}</h5>
                        </div>
                        <div class="mb-5">
                            <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Asal SMP</label>
                            <h5 type="tanggalLahir" id="repeat-password" name="asalSMP"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->asalSekolah->asalSMP }}</h5>
                        </div>
                        <div class="mb-5">
                            <label for="alamat" class="block mb-2 text-sm font-medium">Alamat SMP</label>
                            <h5 type="text" id="alamat" name="alamatSMP"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>{{ $pendaftar->asalSekolah->alamatSMP }}</h5>
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
                        <img class="w-[20rem] h-52 object-cover rounded-lg bottom-6 mx-[3.2rem] absolute"
                            src="{{ asset('storage/' . $pendaftar->berkas->ijazah) }}" alt="ijazah"
                            onclick="openModal(this.src)" />
                    </div>
                    <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                        <h2 class="flex justify-center my-8 font-semibold">
                            PAS FOTO
                        </h2>
                        <img class="w-[20rem] h-52 object-cover rounded-lg bottom-6 mx-[3.2rem] absolute"
                            src="{{ asset('storage/' . $pendaftar->berkas->pasFoto) }}" alt=""
                            onclick="openModal(this.src)" />
                    </div>
                    <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                        <h2 class="flex justify-center my-8 font-semibold">
                            KARTU KELUARGA
                        </h2>
                        <img class="w-[20rem] h-52 object-cover rounded-lg bottom-6 mx-[3.2rem] absolute"
                            src="{{ asset('storage/' . $pendaftar->berkas->kartuKeluarga) }}" alt=""
                            onclick="openModal(this.src)" />
                    </div>
                    <div class="relative h-80 bg-white shadow-lg border rounded-xl">
                        <h2 class="flex justify-center my-8 font-semibold">
                            AKTA KELAHIRAN
                        </h2>
                        <img class="w-[20rem] h-52 object-cover rounded-lg bottom-6 mx-[3.2rem] absolute"
                            src="{{ asset('storage/' . $pendaftar->berkas->aktaKelahiran) }}" alt=""
                            onclick="openModal(this.src)" />
                    </div>
                    <div class="pb-6"></div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- modal image --}}
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
