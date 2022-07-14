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
    </head>
    <!-- <body class="grid place-items-center"> -->
    <body class="" >
        <!-- Frame 1 -->
        @livewire('home.frame1')
        <!-- Frame 2 -->
        @livewire('home.frame2')
        <!-- Frame 3 -->
        @livewire('home.frame3')
        <!-- Frame 4 -->
        @livewire('home.frame4')
        <!-- Frame 5 -->
        @livewire('home.frame5')

        @livewireScripts
    </body>
</html>
