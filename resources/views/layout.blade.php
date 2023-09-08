<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'PerfumePicker') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMt23cez/egQFZavGz9e4N6w5TcF3N2Ar1sLewn" crossorigin="anonymous">

</head>
<body class="bg-lightgrey text-darkgrey">
<nav class="bg-mint p-4">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <a href="/" class="text-2xl text-white font-bold">{{ config('app.name', 'PerfumePicker') }}</a>
            <div class="space-x-4">
                <a href="/login" class="text-white">Login</a>
            </div>
        </div>
    </div>
</nav>

<main class="container mx-auto p-4">
    @yield('content')
</main>
</body>
</html>
