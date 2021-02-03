@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="grid grid-cols-10 " style="padding:10px">
            <a class="col-md-1 text-center  bg-red-600 bg-opacity-60 hover:bg-opacity-50"
                style="border:2px solid white;border-radius:10px;width:100px;height:50px;color:white;padding:10px; "
                href="home">
                <i class="fa fa-step-backward" aria-hidden="true"></i>
            </a>
            <div class="col-2  text-center bg-opacity-60 bg-red-600"
                style="border:2px solid white;border-radius:10px;width:300px;height:50px;color:white;padding:10px;">
                Student Category</div>
        </div>

        <div class="grid md:grid-cols-4 gap-2 place-items-center text-white object-center ">
            <a class="box-border h-42 w-60  border-2 bg-red-600 bg-opacity-60 hover:bg-opacity-50 rounded-lg md:col-start-2 p-8 text-center"
                style="margin-top:140px" href="student_category">STAGING</a>
            <a class="box-border h-42 w-60  border-2 bg-blue-900 bg-opacity-60 hover:bg-opacity-50 rounded-lg p-8  text-center"
                style="margin-top:140px" href="evaluation">EVALUATION</a>
        </div>
    </div>

@stop
