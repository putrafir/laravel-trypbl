@extends('layouts.main')

@section('container')
<div
class="w-full h-[26rem] min-h-75"
style="background-image: url(img/diterima.png)"
>
<div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
</div>

</div>


<!-- konten -->
<main class="-mt-[390px] ml-80 h-full max-h-screen">
@include('partials.pages')

<div class="w-[68rem] h-[726px] bg-white shadow-lg rounded-xl mt-8">
    <div class="w-full h-full">
      <h2 class="font-semibold p-7">Calon Diterima</h2>
      <ol class="flex flex-wrap font-medium text-slate-400 text-sm">
        <li class="pl-[10rem]">NAMA</li>
        <li class="pl-[12rem]">NIM</li>
        <li class="pl-[88px]">KELAMIN</li>
        <li class="pl-[8rem]">ALAMAT</li>
      </ol>

      <hr class="mx-6 mt-5" />

      <!-- kotak profile -->

      <!-- brnae -->
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/gua.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Ahmad Putra Fidaus
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/sindy.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Sindy Aulia Rahma
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/mus.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Muhammad Musyaffa
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/ropi.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Rofi Nazar Amrikin
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/aripa.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Arifah Nur Basyiroh Machi
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/gita.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">
            Aisya Dwi Anggita
          </h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-6">
        <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
          <img src="../../img/profil/gua.pdf" alt="profil" class="w-[66px] py-2 px-2" />
          <h2 class="font-semibold pl-4 text-dark mt-6">Tukijo</h2>
          <div class="pt-6 flex absolute pl-60">
            <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
            <h2 class="pl-[4rem] text-sm text-slate-400">
              Labanasem, kabat Banyuwangi
            </h2>
          </div>

          <a class="-mt-12" href="button/lihat.html">
            <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
              Lihat
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection

