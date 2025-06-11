<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    @include('component.navbar')

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    @include('component.footer')
</body>
</html>


<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    ceritanya ini tombol
</button>