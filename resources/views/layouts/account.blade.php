<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.includes.app.head')
    </head>
    <body class="h-screen overflow-y-auto">
        <div class="flex flex-row h-full">
            <div class="w-1/6 h-full bg-white border-r border-gray-200">
                <div class="flex flex-col h-full justify-between">
                    @include('layouts.account.nav')
                    <div x-data="{ open: false }" class="flex-shrink-0 flex border-t border-gray-200 p-4 relative">
                        <a x-on:click="open = true" href="#" class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ Auth::user()->name_first . ' ' . Auth::user()->name_last }}</p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Account Settings</p>
                                </div>
                            </div>
                        </a>
                        <div x-show.transition="open" x-on:click.away="open = false" class="absolute origin-top bottom-20 left-0 right-0 mx-2 bg-white border border-gray-300 rounded-md divide-y divide-gray-300">
                            <div class="py-1">
                                <a href="{{ route('admin.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Admin Dashboard</a>
                            </div>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Help & Support</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Change Log</a>
                            </div>
                            <div class="py-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full px-4 py-2 text-sm text-gray-700 text-left hover:text-gray-900 hover:bg-gray-100" >Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-full overflow-y-auto p-4 bg-gray-50">
                @yield('content')
            </div>
        </div>
    </body>
</html>