<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Real Estate Landing Page</title>
        <!-- Alpine -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Tailwindcss -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Flowbite -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    </head>
    <!-- <body class="grid place-items-center"> -->
    <body class="" >
        <!-- Sample Nav Bar with Responsive Design -->
        @livewire('home.nav')
        <!-- Section2 -->
        <x-section2/>
        <!-- Section 3 -->
        <x-section3/>
        <!-- Section 4 -->
        <x-section4/>
        <!-- Section 5 -->
        <x-section5/>
        @livewireScripts

        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    </body>
</html>
