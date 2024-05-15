<div class="grid grid-cols-6">
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
</div>

{{-- <div
            class=" mt-6 max-w-sm flex justify-center content-center bg-white shadow-sm rounded-lg border p-5 mx-[30%]">
            <h1 class="text-xl font-semibold text-dark ">Belum Ada Yang Mendaftar</h1>
        </div> --}}
