<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satrio Utomo | {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    @include('partials.navbar')
    
    <div class="px-16 mt-4">
        @yield('content')
    </div>
</body>
<script src="js/script.js"></script>
</html>