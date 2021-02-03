@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <h2>Show All Image from public folder using Laravel</h2>

                    <span class="text-white">{{ count($images) }}</span>

                    @for ($i = 0; $i < count($images); $i++){
                        <span class="text-white">{{ $images[$i] }}</span>
                        }
                    @endfor
                    {{-- <ul>
                        @foreach ($images as $image)
                            <span class="text-white">{{ $image->getFilename() }}</span>

                            <li style="width:80px;display:inline-block;margin:5px 0px">
                                <input type="checkbox" name="images[]" value="{{ $image->getFilename() }}" />
                                <img src="{{ asset('images/' . $image->getFilename()) }}" width="50" height="50">
                            </li>
                        @endforeach
                    </ul> --}}

                </form>
            </div>
        </div>
    </div>


@endsection
