<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet" />
    <title> @yield('title')</title>
</head>

<body>

    @section('nav')
        <div class="container md:px-36 py-5 sticky top-0 bg-white">
            <div class="grid gap-5 md:gap-x-72 grid-cols-3">
                <img src="images/Canon.png" class="col-start-1" alt="img">
                <img src="images/cpmlogo.png" alt="img">
                <img src="images/MGR.png" alt="img">

            </div>
        </div>
    @show

    <div class="container" id="contents"
        style='background-image: url(" images/For JUDGE App_1.jpg");background-size:cover;height:1200px;'>
        @if (Auth::user() != null)
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="text-gray-200">
                @csrf
                <br>
                <span class=" mr-5 border-2 rounded-md border-gray-200 p-2">{{ Auth::user()->name }}</span>
                <button type="submit" id='one'
                    class="border-2 border-gray-200 rounded-md p-2 float-right">Logout</button>
            </form>
        @endif
        @yield('content')
    </div>
</body>

</html>
