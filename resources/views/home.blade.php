@extends('layouts.app')

<style>
    .catbox {
        border: 3px white solid;
        border-radius: 30px;
        padding-width: 300px;
        paddingheight: 200px;
        background-color: red;
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


    <div class="" style="">

      
    </div>
    <div class="grid md:grid-cols-5 gap-3 place-items-center text-white object-center ">
        <a class="box-border h-42 w-60  border-2 bg-red-600 hover:bg-red-400 rounded-lg md:col-start-2 p-8 text-center bg-opacity-60 hover:bg-opacity-50 shadow-inner"
            style="margin-top:180px" href="student_category">STUDENT CATEGORY</a>
        <a class="box-border h-38 w-60  border-2 bg-red-600 hover:bg-red-400 rounded-lg p-5  text-center bg-opacity-60 hover:bg-opacity-50"
            style="margin-top:180px" href="theme1_category">OPEN CATEGORY <BR> THEME-1</a>
        <a class="box-border h-38 w-60  border-2 bg-red-600 hover:bg-red-400 rounded-lg p-5  text-center bg-opacity-60 hover:bg-opacity-50"
            style="margin-top:180px" href="theme2_category">OPEN CATEGORY <br> THEME-2</a>
    </div>
@stop
