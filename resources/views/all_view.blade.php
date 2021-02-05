@extends('layouts.app')

@section('profile')
@endsection
@section('content')

    <div class="bg-purple-100 bg-opacity-60 m-4 p-3 shadow-inner rounded-md">
        <span>Total Photos::{{count($images)}}</span>

        <div class="grid grid-cols-4 gap-1">
            @for ($i = 0; $i < count($images); $i++)
                <div class=" p-1 ">
                    <br>
                    <a class=" rounded-xl ml-20" href="detail?name={{ $images[$i]->getFilename() }}">
                        <img class="shadow-2xl" src="{{ asset('testing/' . $images[$i]->getFilename()) }}">


                    </a>
                </div>
            @endfor
            

        </div>
        <form action="{{url('store')}}" method="post" class="mt-12">
            @csrf
            <button type="submit" class="bg-blue-200 px-6 m-5 py-4 rounded-md float-right shadow-lg">Push</button>
        </form>
        
    </div>


@endsection
