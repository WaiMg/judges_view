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
        <div class="container md:px-36  sticky top-0 bg-white">
            <div class="grid gap-5 md:gap-x-72 grid-cols-3">
                <img src="images/Canon.png" class="col-start-1" alt="img">
                <img src="images/cpmlogo.png" alt="img">
                <img src="images/MGR.png" alt="img">

            </div>
        </div>
    @show

    <div class="container" id="contents"
        style='background-image: url(" images/For JUDGE App_1.jpg");background-size: 100% 100%;background-repeat: no-repeat;height:650px;'>
        @if (Auth::user() != null)
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="text-gray-200">
                @csrf
                <br>

                <button type="submit" id='one'
                    class="border-2 border-gray-200 rounded-md p-2 float-right hover:bg-red-600 hover:bg-opacity-40 mr-2">Logout
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                </button>
                <span class="float-right mr-5 border-2 rounded-md border-gray-200 p-2 px-5"><i
                        class="fas fa-user-alt"></i> {{ Auth::user()->name }}</span>


            </form>
        @endif
        @yield('content')
    </div>
</body>

</html>
