@extends('layouts.app')

@section('profile')
@endsection
@section('content')

    <div class=" place-content-center">
        <div class="grid grid-cols-3 gap-3">

            @for ($i = 0; $i < count($images); $i++)
                <div class="border-2 border-black-200 p-2 bg-gray-200">
                    <br>
                    <a class=" rounded-xl ml-20" href="detail?name={{ $images[$i]->getFilename() }}">
                        <img src="{{ asset('testing/' . $images[$i]->getFilename()) }}">


                    </a>
                </div>
            @endfor


        </div>
    </div>


@endsection
