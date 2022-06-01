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
            <div class="content-wrapper ml-0 lg:ml-60 h-screen">
                @if($title)
                    <x-blocks.page-header :title="$title" :breadcrumbs="$breadcrumbs" :no-breadcrumbs="!$breadcrumbs">
                        @if($createButton)
                            <x-slot name="afterTitle">
                                <x-blocks.button variant="primary" label="Create" class="ml-4 mr-0 mb-0" href="{{ route($createRoute) }}"/>
                            </x-slot>
                        @endif
                    </x-blocks.page-header>
                @endif
                <div class="p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @livewireScripts
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js" defer></script>
    </body>
</html>