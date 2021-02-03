@extends('layouts.app')

<style>
    .catbox {
        border: 3px white solid;
        border-radius: 30px;
        padding-width: 300px;
        paddingheight: 200px;
        background-color: blue;
        color: white;


    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>
@section('title', 'Page Titles')



@section('content')

    <br><br><br>

    <div class="container" style="">


        <div class="grid md:grid-cols-3 gap-3 place-items-center text-white object-center ">
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg md:col-start-1 p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
        </div>
        <div class="grid md:grid-cols-3 gap-3 place-items-center text-white mt-24">
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg md:col-start-1 p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
        </div>
        <div class="grid md:grid-cols-3 gap-3 place-items-center text-white mt-24 ">
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg md:col-start-1 p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-600 hover:bg-blue-400 rounded-lg p-8 text-center bg-opacity-60 hover:bg-opacity-50"
                href="student_category">ROUND-1</a>
        </div>
    </div>
@stop
