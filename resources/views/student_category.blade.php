

@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="grid grid-cols-10 "  style="padding:10px">
        <a class="col-md-1 text-center  bg-red-600 hover:bg-red-500"style="border:2px solid white;border-radius:10px;width:100px;height:50px;color:white;padding:10px;" href="category">Back</a>
        <div class="col-2  text-center "style="border:2px solid white;border-radius:10px;background-color:red;width:300px;height:50px;color:white;padding:10px;">Student Category</div>
    </div>

    <div class="grid md:grid-cols-4 gap-2 place-items-center text-white object-center " >
        <a class="box-border h-42 w-60  border-2 bg-red-600 hover:bg-red-400 rounded-lg md:col-start-2 p-8 text-center"style="margin-top:140px" href="student_category">STAGING</a>
        <a class="box-border h-42 w-60  border-2 bg-blue-900 hover:bg-blue-500 rounded-lg p-8  text-center"style="margin-top:140px" href="detail">EVALUATION</a>
      </div>
  </div>
  
@stop