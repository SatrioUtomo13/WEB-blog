@extends('layouts.main')

@section('content')
    <article class="w-3/5 justify-center m-auto">
        <h2 class="text-2xl font-semibold mb-3">{{ $post->title }}</h2>

        <p class="mb-2">Created by: 
            <a href="/blog?author={{ $post->author->username }}" class="text-blue-500">{{ $post->author->name }}</a> in 
            <a href="/blog?category={{ $post->category->slug }}" class="text-blue-500"> {{ $post->category->name }}  </a>
        </p>

        @if ($post->image)
            <div class="max-h-[400px] overflow-hidden">
                <img class="rounded-t-lg" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" />
            </div>
        @else
            <img class="rounded-t-lg" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
        @endif
        

        <article class="mb-5 space-y-2 mt-3">
            {!! $post->body !!}
        </article>

        <a href="/blog" class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 mt-5 hover:bg-blue-200 transition duration-200">back to post</a>
    </article>

    
@endsection