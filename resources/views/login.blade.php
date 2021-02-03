@extends('layouts.app')

@section('title', 'Page Titles')



@section('content')
    <div class="grid md:grid-cols-5 pt-48" style="width:auto; height:500px; ">
        <div class="col-start-3">
            <img src="images/Login ICON_1.png" alt="Noimage" class="w-14 float-left">
            <div class="text-gray-300 text-2xl mt-3 mx-16" style="">Login</div>
            <br>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <input class="rounded-lg py-1 px-4" type="text" name="name" class="mb-3" placeholder="User Name">
                <br>
                <br>

                <input class="rounded-lg py-1 px-4" type="password" name="password" placeholder="password">
                <br>
                <br>
                <button
                    class="border-2 border-blue-300 font-bold text-blue-300 transition duration-300 ease-in-out rounded-lg hover:bg-blue-400 hover:text-white mr-6  px-8 ml-20"
                    type="submit">
                    LOGIN
                </button>
                <br>
                <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
            </form>

        </div>
    </div>
@stop
