@extends('layouts.app')
<style>
    .corret:hover img {
        filter: brightness(70%);
    }

</style>
@section('nav')

@endsection
@section('profile')

@endsection

@section('content')
    <section class="py-3 overflow-x-hidden">
        <div class=" px-4 mx-auto">
            <div class="flex flex-wrap lg:flex-nowrap gap-2">
                <div class="w-2/3 border-2 border-black rounded-lg" style="width: 100%;height:auto">
                    <div class="grid grid-cols-10 h-8 bg-blue-900 text-white border-2 rounded-lg border-blue-900">
                        <div class="col-span-2 border-2 rounded-lg text-center"><a href="home"><i class="fa fa-home" aria-hidden="true"></i></a>  EVALUATION</div>

                        <div class="col-start-5 col-span-2 border-2 rounded-lg text-center">ROUND-1</div>

                        <div class="col-end-11 col-span-2 border-2 rounded-lg text-center">TOTAL-100</div>

                    </div>
                    <img class="mx-auto my-5 z-10" src="/DB/{{$name}}" style="width:1000px;height:auto"
                        alt="no">
                </div>

                <div class="w-1/3 lg:order-1 border-2 rounded-lg bg-white border-black relative" style="height: auto ">
                    
                    <h2 class="text-2xl font-bold font-heading text-center bg-blue-900 text-white">FILE INFORMATION</h2>


                    
                    <div class="flex items-start p-4">

                        <div>
                            
                   
                            {{$name}}
                            <br>
                   
                             Camera Used :  {{$camera['model']}}
                                {{$camera['make']}}
                                <br>
                             Aperture :   {{$camera['aperture']}}
                             <br>
                             Exposure : {{$camera['exposure']}}
                             <br>
                             ISO :{{$camera['iso']}}
                             <br>
                             Date Taken: {{$camera['date']}}

                            
                        </div>
                    </div>
                    <div class="grid grid-cols-5 gap-4 h-10 p-4 absolute inset-x-0 bottom-0 h-24 border-2 border-black bg-black rounded-b-lg">

                        <button class="corret"><img class="col-span-1 " src="/images/Reject.png" alt=""></button>
                        <button class="corret"><img class="col-span-1 " src="/images/pass.png" alt=""></button>
                        <button
                            class="col-start-4 col-span-2 border-2 rounded-lg bg-red-600 hover:bg-red-500 text-white">NEXT</button>
    
    
    
                    </div>
                        
                    
                </div>
             
            </div>
        </div>
    </section>
@stop
