<div class="container">

    <aside id="default-sidebar"
        class="fixed top-5 bottom-5 left-5 z-40  w-[270px]  transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto rounded-3xl bg-white dark:bg-gray-800 shadow-xl">
            <ul class="font-medium text-sm">
                <li>
                    <div class="text-dark text-xl pt-4">
                        <div class="mt-1 flex justify-center items-center py-3">
                            <img src="{{ asset('img/logo.jpg') }}" alt="logo" class="w-8 mr-2" />
                            <h1 class="font-semibold text-base">Admin Panel</h1>
                        </div>

                        <hr class="my-3 text-gray-600 mx-5" />
                    </div>
                </li>
                <div class="px-2">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center px-4 py-3  {{ Request::is('dashboard') ? ' bg-gray-100 text-blue-500' : 'text-slate-600' }}  mt-3  rounded-lg hover:bg-gray-100 group">

                            <svg class="{{ Request::is('dashboard') ? 'text-blue-500' : ' text-slate-600' }} transition duration-75  "
                                width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path
                                    d="M5 3C3.89543 3 3 3.89543 3 5V7C3 8.10457 3.89543 9 5 9H9C10.1046 9 11 8.10457 11 7V5C11 3.89543 10.1046 3 9 3H5Z" />
                                <path
                                    d="M19 21C20.1046 21 21 20.1046 21 19V17C21 15.8954 20.1046 15 19 15H15C13.8954 15 13 15.8954 13 17V19C13 20.1046 13.8954 21 15 21H19Z" />
                                <path
                                    d="M5 11C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H9C10.1046 21 11 20.1046 11 19V13C11 11.8954 10.1046 11 9 11H5Z" />
                                <path
                                    d="M19 13C20.1046 13 21 12.1046 21 11V5C21 3.89543 20.1046 3 19 3H15C13.8954 3 13 3.89543 13 5V11C13 12.1046 13.8954 13 15 13L19 13Z" />
                            </svg>

                            <span class="flex-1 ms-6 whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pendaftar.index') }}"
                            class="flex items-center  px-4 py-3 {{ Request::is('pendaftars/*') ? 'bg-gray-100 text-blue-500' : 'text-slate-600' }}   rounded-lg  hover:bg-gray-100  group">

                            <svg class="{{ Request::is('pendaftars/*') ? 'text-blue-500' : 'text-slate-600' }}   transition duration-75  "
                                width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 6C10.067 6 8.5 7.567 8.5 9.5C8.5 11.433 10.067 13 12 13C13.933 13 15.5 11.433 15.5 9.5C15.5 7.567 13.933 6 12 6ZM10.5 14C8.29086 14 6.5 15.7909 6.5 18C6.5 19.1046 7.39543 20 8.5 20H15.5C16.6046 20 17.5 19.1046 17.5 18C17.5 15.7909 15.7091 14 13.5 14H10.5Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.3193 10.9036C17.4372 10.4555 17.5 9.98509 17.5 9.5C17.5 7.37184 16.2913 5.52599 14.5229 4.61149C15.0855 4.22572 15.7664 4 16.5 4C18.433 4 20 5.567 20 7.5C20 9.15086 18.857 10.5348 17.3193 10.9036ZM19.5 18H20C21.1046 18 22 17.1046 22 16C22 13.7909 20.2091 12 18 12H16.9003C16.7636 12.2674 16.6056 12.5222 16.4286 12.7621C18.2613 13.789 19.5 15.7498 19.5 18Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 7.5C4 5.567 5.567 4 7.5 4C8.23363 4 8.91455 4.22572 9.47708 4.61149C7.70871 5.52599 6.5 7.37184 6.5 9.5C6.5 9.98509 6.5628 10.4555 6.68071 10.9036C5.14295 10.5348 4 9.15086 4 7.5ZM7.09971 12H6C3.79086 12 2 13.7909 2 16C2 17.1046 2.89543 18 4 18H4.5C4.5 15.7498 5.73868 13.789 7.57136 12.7621C7.39438 12.5222 7.23642 12.2674 7.09971 12Z" />
                            </svg>
                            <span class="flex-1 ms-6 whitespace-nowrap">Pendaftar</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('diterima.index') }}"
                            class="flex items-center px-4 py-3  {{ Request::is('accepted/*') ? 'bg-gray-100 text-blue-500' : 'text-slate-600 ' }} rounded-lg  hover:bg-gray-100  group">

                            <svg class="{{ Request::is('accepted/*') ? 'text-blue-500' : 'text-slate-600' }}  transition duration-75 "
                                width="24" height="24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 2C5.89543 2 5 2.89543 5 4V5C4.44772 5 4 5.44772 4 6C4 6.55228 4.44772 7 5 7V8C4.44772 8 4 8.44772 4 9C4 9.55228 4.44772 10 5 10V11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13V14C4.44772 14 4 14.4477 4 15C4 15.5523 4.44772 16 5 16V17C4.44772 17 4 17.4477 4 18C4 18.5523 4.44772 19 5 19V20C5 21.1046 5.89543 22 7 22H18C19.1046 22 20 21.1046 20 20V4C20 2.89543 19.1046 2 18 2H7ZM10 10C10 8.34315 11.3431 7 13 7C14.6569 7 16 8.34315 16 10C16 11.6569 14.6569 13 13 13C11.3431 13 10 11.6569 10 10ZM9 17C9 15.3431 10.3431 14 12 14H14C15.6569 14 17 15.3431 17 17C17 17.5523 16.5523 18 16 18H10C9.44772 18 9 17.5523 9 17Z" />
                            </svg>

                            <span class="flex-1 ms-6 whitespace-nowrap">Diterima</span>
                        </a>
                    </li>

                    <li>
                        <a href="/addPendaftar"
                            class="flex items-center px-4 py-3  {{ Request::is('addPendaftar') ? ' bg-gray-100 text-blue-500' : 'text-slate-600' }}   rounded-lg  hover:bg-gray-100  group">

                            <svg class=" {{ Request::is('addPendaftar') ? 'text-blue-500' : 'text-slate-600' }}  transition duration-75 "
                                width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9 4C6.79086 4 5 5.79086 5 8C5 10.2091 6.79086 12 9 12C11.2091 12 13 10.2091 13 8C13 5.79086 11.2091 4 9 4ZM7 13C4.79086 13 3 14.7909 3 17V18C3 19.1046 3.89543 20 5 20H13C14.1046 20 15 19.1046 15 18V17C15 14.7909 13.2091 13 11 13H7ZM15 12C15 11.4477 15.4477 11 16 11H17V10C17 9.44772 17.4477 9 18 9C18.5523 9 19 9.44772 19 10V11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H19V14C19 14.5523 18.5523 15 18 15C17.4477 15 17 14.5523 17 14V13H16C15.4477 13 15 12.5523 15 12Z" />
                            </svg>

                            <span class="flex-1 ms-6 whitespace-nowrap">Tambah Pendaftar</span>
                        </a>
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <div
                                class="flex items-center px-4 py-3  text-slate-600  rounded-lg  hover:bg-gray-100  group">
                                <button class="flex">

                                    <svg class=" ml-1 text-slate-600" width="20" height="24"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.37905 1.66859L7.06858 1.08881C10.2892 0.582717 11.8995 0.329671 12.9497 1.22779C14 2.12591 14 3.75596 14 7.01607V9.99959H8.08062L10.7809 6.62428L9.21913 5.37489L5.21913 10.3749L4.71938 10.9996L5.21913 11.6243L9.21913 16.6243L10.7809 15.3749L8.08062 11.9996H14V14.9831C14 18.2432 14 19.8733 12.9497 20.7714C11.8995 21.6695 10.2892 21.4165 7.06857 20.9104L3.37905 20.3306C1.76632 20.0771 0.95995 19.9504 0.479975 19.3891C0 18.8279 0 18.0116 0 16.3791V5.6201C0 3.98758 0 3.17132 0.479975 2.61003C0.95995 2.04874 1.76632 1.92202 3.37905 1.66859Z" />
                                    </svg>

                                    <span class="flex-1 ms-6 whitespace-nowrap">Log Out</span>
                                </button>
                            </div>

                        </form>

                    </li>


                </div>
            </ul>
        </div>
    </aside>


    <!-- Side samping end -->
</div>
