@extends('layouts.main')

@section('content')

    <h1 class="text-3xl font-semibold mb-5">{{ $title }}</h1>

    {{-- searching --}}
    <div class="flex justify-center mb-3">
        <form action="/blog" class="w-1/2">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-red-500 focus:ring-1 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Search..." value="{{ request('search') }}">

                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-500 dark:focus:ring-red-600">Search</button>
            </div>
        </form>
    </div>

    @if ($posts->count())
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center mb-5">

            @if ($posts[0]->image)
                <div class="max-h-[400px] overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" />
                </div>
            @else
                <img class="rounded-t-lg" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" />
            @endif
            
        
            <div class="p-5">
                <a href="/posts/{{ $posts[0]->slug }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}</h5>
                </a>

                <p class="mb-2 text-sm">Created by: 
                    <a href="/blog?author={{ $posts[0]->author->username }}" class="text-blue-500"> {{ $posts[0]->author->name }} </a> 
                    in 
                    <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-blue-500"> {{ $posts[0]->category->name }} </a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </p>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                
                <a href="/posts/{{ $posts[0]->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                </a>
            </div>
        </div>
    
    <div class="w-full grid grid-cols-3 gap-4">
        @foreach ($posts->skip(1) as $post)          
            <div class="relative bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                
                @if ($post->image)
                    <img class="rounded-t-lg" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" />
                @else
                    <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
                @endif
                

                <a href="/blog?category={{ $post->category->slug }}" class="absolute px-3 py-2 top-0 bg-[rgba(0,0,0,0.7)] text-white">{{ $post->category->name }}</a>

                <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>

                    <p class="mb-2 text-sm">Created by: 
                        <a href="/blog?author={{ $post->author->username }}" class="text-blue-500"> {{ $post->author->name }} </a>
                        {{ $post->created_at->diffForHumans() }}
                    </p>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->slug }}</p>

                    <a href="/posts/{{ $post->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    @else
        <p class="text-center text-5xl">NO Post Found</p>
    @endif

    <div class="mt-5">
        {{ $posts->links() }}
    </div>
@endsection