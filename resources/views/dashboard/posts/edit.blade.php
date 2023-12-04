@extends('dashboard.layouts.main')

@section('container')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Edit Post
    </h2>

<div class="w-1/2">
    <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') is-invalid @enderror" autofocus value="{{ old('title', $post->title) }}">
            @error('title')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">       
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image Post</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview block max-w-sm mb-3">
            @else
                <img class="img-preview block max-w-sm mb-3">
            @endif
            <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror" id="image" type="file" name="image" onchange="previewImage()">
            @error('image')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            @error('body')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <textarea id="editor" name="body">{{ old('body', $post->body) }}</textarea>
        </div>
    
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Post</button>
    </form>
</div>

</div>

<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

    // image preview
    function previewImage() {
        // get elemen
        const image = document.getElementById('image');
        const imgPreview = document.querySelector('.img-preview');

        const oFReader = new FileReader(); // call filereader
        oFReader.readAsDataURL(image.files[0]); // read data

        
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection