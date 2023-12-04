<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Satrio Blog | Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
        />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- text editor --}}
        {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
        

    </head>
    <body>
        <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }"
        >
        {{-- desktop sidebar --}}
        @include('dashboard.layouts.asideDesktop') 

        {{-- tablet sidebar --}}
        @include('dashboard.layouts.asideTablet')
        <div class="flex flex-col flex-1 w-full">

            {{-- header --}}
            @include('dashboard.layouts.header')

            <main class="h-full overflow-y-auto">
            @yield('container')
            </main>
        </div>
        </div>
    </body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
