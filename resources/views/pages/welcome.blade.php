@extends('layouts.frontend')

@section('title')
    Welcome
@endsection

@section('content')

    <!-- Hero section -->
    <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
            <div class="my-8">
                <div class="mt-20 mb-16">
                    <div class="mt-6 sm:max-w-xl">
                        <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                            {{ config('app.name') }}
                        </h1>
                        <p class="mt-6 text-xl text-gray-500">
                            Located in the North Park neighborhood of San Diego, we are a small local family-owned business where we strive to bring you a wonderful and delicious experience with each bite of our amazing and authentic Thai cuisine.
                        </p>
                    </div>
                    <div class="mt-8 sm:mb-4">
                        <a href="#" class="rounded-md border border-transparent px-5 py-3 bg-emerald-500 text-base font-medium text-white shadow hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 sm:px-10">View Our Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:mx-auto sm:max-w-md sm:px-6">
        <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <div class="hidden sm:block sm:w-full">
                    <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url('#837c3e70-6c3a-44e6-8854-cc48c737b659')" />
                    </svg>
                </div>
                <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-sm sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                    <img class="my-4 w-full sm:w-2/3 rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="/storage/frontend.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection