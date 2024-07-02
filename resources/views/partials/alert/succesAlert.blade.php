@if (session('succes'))
    <div class=" bg-white h-full">
        <div id="alert-3" class="flex items-center rounded-lg p-4 mb-4 text-green-800  bg-green-50  dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session('succes') }}
            </div>
        </div>
    </div>
@endif
@if (session('warning'))
    <div class="bg-white h-full">
        <div id="alert-3" class="flex items-center rounded-lg p-4 mb-4 text-red-800  bg-red-50  dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session('warning') }}
            </div>
        </div>
    </div>
@endif

@if (session('pop_up'))
    <div id="popup-alert" class=" fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-black bg-opacity-50 absolute inset-0"></div>
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4" width="97" height="97" viewBox="0 0 97 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M73.4286 2H23.4286C11.5939 2 2 11.5939 2 23.4286V73.4286C2 85.2636 11.5939 94.8571 23.4286 94.8571H73.4286C85.2636 94.8571 94.8571 85.2636 94.8571 73.4286V23.4286C94.8571 11.5939 85.2636 2 73.4286 2Z"
                            stroke="#65D32A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M69.2649 32.3569L40.6934 68.0712L26.4077 57.3569" stroke="#65D32A" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <h3 class="mb-1 text-lg font-semibold dark:text-gray-400">
                        Berhasil di update
                    </h3>
                    <h5 class="mb-5 text-gray-500">{{ session('pop_up') }}</h5>
                    <button id="closeButton" type="button"
                        class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        ok
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
