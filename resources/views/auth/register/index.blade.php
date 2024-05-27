@extends('auth.layouts.main')

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
                            <small>Have an Account? <br><a href="/">Login</a></small>
                        </div>
                        <h3 class=" text-3xl font-semibold text-gray-900 dark:text-white">
                            Register
                        </h3>

                    </div>
                    <!-- Modal body -->
                    <div class="p-4   md:p-5">
                        <form class="space-y-6" action="/register" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" id="email"
                                    class="@error('email') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="name@gmail.com" required />
                                @error('email')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                            class="font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex gap-2">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Name</label>
                                    <input value="{{ old('name') }}" type="name" name="name" id="name"
                                        class="@error('name') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Your name" required />
                                    @error('name')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Username</label>
                                    <input value="{{ old('username') }}" type="username" name="username" id="username"
                                        class="@error('username') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Your username" required />
                                    @error('username')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                                class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="@error('password') border-red-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                                @error('password')
                                    <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                            class="font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
