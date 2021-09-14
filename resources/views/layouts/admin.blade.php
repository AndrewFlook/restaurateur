<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.includes.app.head')
    </head>
    <body class="h-screen overflow-y-auto">
        <div class="flex flex-row h-full">
            <div class="w-1/6 h-full bg-white border-r border-gray-200">
                <div class="flex flex-col h-full justify-between">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">Logo</div>
                        <nav class="mt-5 flex-1 px-2 bg-white space-y-1">
                            <a href="#" class="bg-gray-100 text-gray-900 hover:text-gray-900 hover:bg-gray-100 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-home-lg-alt fa-fw fa-2x text-gray-500 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                                <span class="flex-1">
                                    Dashboard
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-comment-lines fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6">
                                </i>
                                <span class="flex-1">
                                    About
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-envelope fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                                <span class="flex-1">
                                    Contact
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-clock fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                                <span class="flex-1">
                                    Hours
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-book-open fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                                <span class="flex-1">
                                    Menu
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-receipt fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
                                <span class="flex-1">
                                    Orders
                                </span>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <i class="fal fa-user-friends fa-fw fa-2x text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6">
                                </i>
                                <span class="flex-1">
                                    Users
                                </span>
                            </a>
                        </nav>
                    </div>
                    <div x-data="{ open: false }" class="flex-shrink-0 flex border-t border-gray-200 p-4 relative">
                        <a x-on:click="open = true" href="#" class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ Auth::user()->name }}</p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Account Settings</p>
                                </div>
                            </div>
                        </a>
                        <div x-show.transition="open" x-on:click.away="open = false" class="absolute origin-top bottom-20 left-0 right-0 mx-2 bg-white border border-gray-300 rounded-md divide-y divide-gray-300">
                            <div class="py-1">
                                <a href="{{ route('account.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-gray-100">Account Settings</a>
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
                Test Right
            </div>
        </div>
    </body>
</html>