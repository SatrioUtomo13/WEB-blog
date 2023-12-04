@extends('dashboard.layouts.main')

@section('container')
    <div class=" px-6 mx-auto grid justify-items-start">
        <article class="w-3/5">
            <h2 class="text-2xl font-semibold mb-3">{{ $post->title }}</h2>
            
            <div class="flex space-x-2">
                <a href="/dashboard/posts" class="bg-green-800 text-white flex w-fit py-1 px-2 rounded-md hover:text-gray-200">
                    <svg class="w-3 h-3 text-white-800 dark:text-white self-center mr-2 hover:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    Back to my posts
                </a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-700 text-white flex w-fit py-1 px-2 rounded-md hover:text-gray-200">
                    <svg class="w-3 h-3 text-white-800 dark:text-white self-center mr-2 hover:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                        <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                    </svg>
                    Edit
                </a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="bg-red-800 text-white flex w-fit py-1 px-2 rounded-md hover:text-gray-200" onclick="return confirm('Are you sure?')">
                        <svg class="w-3 h-3 text-white-800 dark:text-white self-center mr-2 hover:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                        </svg>
                        Delete
                    </button>
                </form>

            </div>
    
            @if ($post->image)
                <div class="max-h-[400px] overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" />
                </div>
            @else
                <img class="rounded-t-lg mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
            @endif
            
    
            <article class="mb-5 space-y-2 mt-3">
                {!! $post->body !!}
            </article>
    
            <a href="/blog" class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 mt-5 hover:bg-blue-200 transition duration-200">back to post</a>
        </article>
    </div>
@endsection