<div class="flex">
    <!-- pages -->
    <div class="w-full lg:w-1/2">
        <ol>
            <li class="text-sm text-slate-300">Pages</li>
            <li class="font-semibold text-[1rem] text-white">{{ $title }}</li>
        </ol>
    </div>

    {{-- <form class="grow absolute pl-[34rem]" action="/pendaftar">
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
    </form> --}}

    <!-- profile -->
    <div class="absolute w-full lg:w-1/2 pl-[65rem] cursor-pointer">

        @auth
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="" type="button">
                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 20C10.107 20 8.36763 19.3425 6.99768 18.2435C6.99845 18.2441 6.99923 18.2448 7 18.2454V17.5625C7 15.7676 8.49238 14.3125 10.3333 14.3125H13.6667C15.5076 14.3125 17 15.7676 17 17.5625V18.2454C15.6304 19.3433 13.8919 20 12 20ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5003 17.5593 21.9635 12.0675 21.9998C12.045 21.9999 12.0225 22 12 22C11.9763 22 11.9527 21.9999 11.9291 21.9998C6.43889 21.9616 2 17.4992 2 12ZM12 7C10.1591 7 8.66667 8.45507 8.66667 10.25C8.66667 12.0449 10.1591 13.5 12 13.5C13.8409 13.5 15.3333 12.0449 15.3333 10.25C15.3333 8.45507 13.8409 7 12 7Z"
                        fill="#ffffff" />
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
