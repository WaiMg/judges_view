@extends('layouts.app')

@section('title', 'Page Titles')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <figure class="bg-gray-200 rounded-xl p-8 grid grid-cols-12">
        <img class="w-32 h-32 rounded-full mx-auto" src="images/svg.png" alt="" width="384" height="512">
        <div class="pt-6 space-y-4">
            <blockquote>
                <p class="text-lg font-semibold text-red-300">
                    “Tailwind CSS is the only framework that I've seen scale
                    on large teams. It’s easy to customize, adapts to any design,
                    and the build size is tiny.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-blue-300">
                    Sarah Dayan
                </div>
                <div class="text-gray-500">
                    Staff Engineer, Algolia
                </div>
            </figcaption>
        </div>
    </figure>
@stop
