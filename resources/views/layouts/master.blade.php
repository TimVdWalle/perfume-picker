<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PerfumePicker</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-lightgrey text-darkgrey">
<header class="bg-mint p-4">
    <h1 class="text-darkblue text-4xl">PerfumePicker</h1>
</header>
<main class="container mx-auto p-4">
    @yield('content')
</main>
<footer class="bg-mint p-4 mt-4">
    <p class="text-darkblue">Footer Content Here</p>
</footer>
@vite('resources/js/app.js')
</body>
</html>
