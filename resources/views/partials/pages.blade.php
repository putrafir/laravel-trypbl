<div class="flex">
    <!-- pages -->
    <div class="w-full lg:w-1/2">
        <ol>
            <li class="text-sm text-slate-300">Pages</li>
            <li class="font-semibold text-[1rem] text-white">{{ $title }}</li>
        </ol>
    </div>

    <form class="grow absolute pl-[34rem]" action="/pendaftar">
        {{-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label> --}}
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input name="search" type="search" id="default-search"
                class="block w-[30rem] h-10 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search" value="{{ request('search') }}" required />
            <button type="submit"
                class="text-white text-[12px] h-8 absolute end-1 bottom-1 bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full px-4 py-2">
                Search
            </button>
        </div>
    </form>





    <!-- profile -->
    <div class="absolute w-full lg:w-1/2 pl-[65rem] cursor-pointer">





        @auth
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="" type="button"><svg
                    width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 15.1739C20.3386 15.1739 24 15.8789 24 18.599C24 21.32 20.3146 22 16 22C11.6624 22 8 21.295 8 18.575C8 15.8539 11.6854 15.1739 16 15.1739ZM16 2C18.9391 2 21.294 4.35402 21.294 7.29105C21.294 10.2281 18.9391 12.5831 16 12.5831C13.0619 12.5831 10.706 10.2281 10.706 7.29105C10.706 4.35402 13.0619 2 16 2Z"
                        fill="white" fill-opacity="0.87" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">

                    <li>

                        <form action="/logout" method="POST">
                            @csrf
                            <button class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Logout
                            </button>
                        </form>

                    </li>
                </ul>
            </div>
        @else
            <a href="/login">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 12L4 12M16 12L12 16M16 12L12 8M15 4H17C18.6569 4 20 5.34315 20 7V17C20 18.6569 18.6569 20 17 20H15"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        @endauth



    </div>
</div>
