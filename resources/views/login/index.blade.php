@extends('layouts.log')

@section('container')
    <div class="w-full h-[26rem] min-h-75 bg-blueFist">


        <!-- Modal toggle -->


        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1"
            class=" flex justify-end pr-28  overflow-y-auto overflow-x-hidden fixed top-0 z-50 items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class=" py-5 relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class=" items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <div class="flex justify-between pb-3">
                            <h4>Welcome to <span>Admin Panel</span></h4>
                            <small>No Account? <br><a href="/register">Register</a></small>
                        </div>
                        <h3 class=" text-3xl font-semibold text-gray-900 dark:text-white">
                            Login
                        </h3>

                        @if (@session('success'))
                            <div class="flex items-center p-4  mt-2 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{ session('success') }}
                                </div>
                            </div>
                        @endif

                    </div>
                    <!-- Modal body -->
                    <div class="p-4   md:p-5">
                        <form class="space-y-8" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>

                            <button type="submit"
                                class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                                to your account</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
