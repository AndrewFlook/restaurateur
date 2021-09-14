<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.includes.app.head')
    </head>
    <body class="font-sans antialiased h-screen bg-white">
        <div class="">
            <!-- Navigation -->

            <!-- Page Heading -->
            @include('layouts.includes.frontend.header')

            <!-- Page Content -->
            <main class="sm:overflow-x-hidden">
                @yield('content')
            </main>
        </div>
    </body>
</html>
