<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Just2Canada Admin' }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="antialiased">
        <div class="wrapper h-auto w-full" x-data="{showSidebar: false}">
            <x-admin.header/>
            <x-admin.sidebar/>
            <div class="content-wrapper ml-0 lg:ml-60">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js" defer></script>
    </body>
</html>