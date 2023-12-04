@extends('layouts.main')

@section('content')

    <h1 class="mb-5 text-2xl">Post categories </h1>

    <div class="flex flex-wrap w-full bg-red-500">
        @foreach ($categories as $category)
                <figure class="relative w-1/3 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="/blog?category={{ $category->slug }}">
                        <img class="rounded-lg" src="https://source.unsplash.com/400x400?{{ $category->name }}" alt="{{ $category->name }}">
                    </a>
                    <figcaption class="absolute left-1/2 -translate-x-1/2 -translate-y-1/2 text-lg text-white top-1/2 bg-[rgba(0,0,0,0.7)] w-full">
                        <p class="text-center py-3">{{ $category->name }}</p>
                    </figcaption>
                </figure>
            
        @endforeach
    </div>
    {{-- @foreach ($categories as $category)
        <ul class="mb-5">
            <li>
                <h1 class="font-semibold text-2xl">
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h1>
            </li>
        </ul>
    @endforeach --}}
@endsection     