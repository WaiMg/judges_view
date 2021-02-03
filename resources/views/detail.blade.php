

@extends('layouts.app')
<style>
    .corret:hover img {
        filter: brightness(70%);
    }

</style>

@section('content')

<section class="py-3 overflow-x-hidden">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap lg:flex-nowrap gap-4">
        <div class="relative w-full lg:w-2/3 order-1 lg:order-0 my-12 lg:my-0"><img class="relative mx-auto rounded-xl z-10" src="https://images.unsplash.com/photo-1484308129484-ff3063eea281?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1080&amp;q=80" style="width:90%;height:auto"  alt=""></div>
        <div class="w-full lg:w-1/3 lg:order-1 border-4 rounded-lg bg-white">
          <div class=" lg:p-3">
            <div class="mb-4">
              <h2 class="text-4xl mt-3 font-bold font-heading text-center bg-blue-900 text-white">FILE INFORMATION</h2>
            </div>
            <div class="flex items-start py-4">
              <div class="w-8 mr-5 text-blue-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <h3 class="mb-2 text-xl font-semibold font-heading">Easy to customize</h3>
                <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
              </div>
            </div>
            <div class="flex items-start py-4">
              <div class="w-8 mr-5 text-blue-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                </svg>
              </div>
              <div>
                <h3 class="mb-2 text-xl font-semibold font-heading">Flexible software</h3>
                <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
              </div>
            </div>
            <div class="flex items-start py-4">
              <div class="w-8 mr-5 text-blue-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                </svg>
              </div>
              <div>
                <h3 class="mb-2 text-xl font-semibold font-heading">Best access for all of the resources</h3>
                <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
              </div>
            </div>
            <div class="grid grid-cols-5 gap-4 h-10">
                
               <button class="corret"><img class="col-span-1 " src="/images/Reject.png" alt=""></button> 
               <button class="corret"><img class="col-span-1 " src="/images/pass.png" alt=""></button> 
                
                <button class="col-start-4 col-span-2 border-2 rounded-lg bg-red-600 hover:bg-red-500 text-white">NEXT</button>
                

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="grid grid-cols-3 divide-x divide-green-500">
    <div class="grid-cols-2">1</div>
    <div class="grid-cols-1">3</div>
  </div>
@stop