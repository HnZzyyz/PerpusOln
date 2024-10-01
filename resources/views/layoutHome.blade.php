<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/build/assets/app.css">
    @vite('resources/css/app.css')
</head>
<body class="twld-relative twld-block twld-font-sans twld-text-white twld-overflow-x-hidden">

    <!-- Background Image -->
    <img src="/assets/img/walpaper2.jpg" alt="Background Image" class="twld-fixed twld-top-0 twld-left-0 twld-w-full twld-h-screen twld-object-cover twld-z-0">

    <!-- Navbar -->
    <header class="twld-fixed twld-top-0 twld-left-0 twld-w-full twld-py-4 twld-z-20 twld-shadow-xl twld-border-b-2 twld-border-white">
        <div class="twld-container twld-mx-auto twld-flex twld-justify-between twld-items-center twld-px-4 sm:twld-px-6 lg:twld-px-8">
            <a href="/home" class="twld-text-2xl sm:twld-text-3xl twld-font-light twld-text-gray-300 twld-cursor-pointer">Perpus.Oln</a>
        </div>
    </header>

    <!-- Content Wrapper -->
    <div class="twld-container twld-relative twld-z-10 twld-block twld-min-h-screen twld-px-4 sm:twld-px-6 lg:twld-px-8 twld-pt-20">
        <div class="twld-w-full twld-h-full twld-overflow-auto">
            @yield('content')
        </div>
    </div>
  
</body>
</html>
