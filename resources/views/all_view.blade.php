@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="">
            <div class="grid grid-cols-4">
                <form action="">


                    <span class="text-white">{{ count($images) }}</span>

                    @for ($i = 0; $i < count($images); $i++)

                        <span class="text-white">{{ $images[$i]->getFilename() }}</span>
                        <img src="{{ asset('testing/' . $images[$i]->getFilename()) }}" width="250" height="250">
                        <a class="text-white bg-red-200" href="detail?name={{ $images[$i]->getFilename() }}">View</a>

                    @endfor

                </form>
            </div>
        </div>
    </div>


@endsection
