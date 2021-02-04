<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet" />
    <title> @yield('title')</title>
</head>

<body>

    @section('nav')
        <a href="home">
            <div class=" md:px-36  sticky top-0 bg-white">
                <div class="grid gap-5 md:gap-x-72 grid-cols-3">
                    <img src="images/Canon.png" class="col-start-1" alt="img">
                    <img src="images/cpmlogo.png" alt="img">
                    <img src="images/MGR.png" alt="img">

                </div>
            </div>
        </a>
    @show

    @section('profile')
        <div class=" h-screen" id="contents"
            style='background-image: url(" images/For JUDGE App_1.jpg");background-size: 100% 100%;background-repeat: repeat-y;'>
            @if (Auth::user() != null)


                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                <div class="flex float-right ">

                    <div x-data="{ dropdownOpen: false }" class="relative">

                        <button @click="dropdownOpen = !dropdownOpen"
                            class="relative z-10 block rounded-md p-2 focus:outline-none">
                            <span
                                class="transition duration-300 ease-in-out mr-5 h-10 border-2 border-white text-white p-2 px-5 rounded-md hover:bg-red-600 hover:bg-opacity-40"><i
                                    class="fas fa-user-alt"></i>
                                {{ Auth::user()->name }}</span>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
                        </div>

                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20 bg-opacity-40">
                            <a href=""
                                class="block px-4 py-2 text-sm capitalize text-gray-200 hover:bg-red-500 hover:bg-opacity-40">
                                Profile
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('frm-logout').submit();"
                                class="block px-4 py-2 text-sm capitalize text-gray-200 hover:bg-red-500 hover:bg-opacity-40">
                                Sign Out
                            </a>

                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="text-gray-200 ">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>

            @show
            {{-- <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                class="text-gray-200">
                @csrf
                <br>

                <button type="submit" id='one'
                    class="border-2 border-gray-200 rounded-md p-2 float-right hover:bg-red-600 hover:bg-opacity-40 mr-2">Logout
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                </button>
                <span class="float-right mr-5 border-2 rounded-md border-gray-200 p-2 px-5"><i
                        class="fas fa-user-alt"></i> {{ Auth::user()->name }}</span>


            </form> --}}
        @endif
        @yield('content')
    </div>
</body>

</html>
