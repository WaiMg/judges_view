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
        <div class="container md:px-36 py-5">
            <div class="grid gap-5 md:gap-x-72 grid-cols-3">
                <img src="images/Canon.png" class="col-start-1" alt="img">
                <img src="images/cpmlogo.png" alt="img">
                <img src="images/MGR.png" alt="img">

            </div>
        </div>
    @show

    <div class="container" id="contents"
        style='background-image: url(" images/For JUDGE App_1.jpg");background-size:cover;height:1200px;'>
        @yield('content')
    </div>
</body>

</html>
