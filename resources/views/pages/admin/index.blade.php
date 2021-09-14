@extends('layouts.admin')

@section('title')

@endsection

@section('content')

    <!-- Actions panel -->
    <section aria-labelledby="quick-links-title">
        <div class="flex mx-auto my-8 w-2/3 rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
            <h2 class="sr-only" id="quick-links-title">Quick links</h2>

            <div class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-emerald-50 hover:bg-emerald-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                <div>
                    <i class="fad fa-info-square fa-fw fa-3x text-emerald-300"></i>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            About
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Update information about your restaurant, such as it's history, the kind of food you serve, how long you been open, and so on.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div class="sm:rounded-tr-lg relative group bg-purple-50 hover:bg-purple-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                <div>
                    <i class="fad fa-bullhorn fa-fw fa-3x text-purple-300"></i>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Announcements
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Here, you can make any announcements you might need for your restaurant, such as allergen warnings, covid-19 restrictions, holiday closures, and more.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div class="relative group bg-lightblue-50 hover:bg-lightblue-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                <div>
                    <i class="fad fa-address-card fa-fw fa-3x text-lightblue-300"></i>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Contact
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Update your contact information and preferences. When visitors submit a message through the contact form, it will appear here.
                    </p>
                </div>
                <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                    </svg>
                </span>
            </div>

            <div class="relative group bg-yellow-50 hover:bg-yellow-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                <div>
                    <i class="fad fa-business-time fa-fw fa-3x text-yellow-300"></i>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a href="#" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            Hours
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Set your regular business hours, holiday hours, happy hour, special event hours, and more.
                    </p>
                    </div>
                        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                            </svg>
                        </span>
                    </div>

                    <div class="sm:rounded-bl-lg relative group bg-red-50 hover:bg-red-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                        <div>
                            <i class="fad fa-utensils-alt fa-fw fa-3x text-red-300"></i>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-lg font-medium">
                                <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Menu
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Complete menu management. Categories, items, options, pricing, and even images for your customers to drool over what they're thinking about ordering.
                            </p>
                        </div>
                        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                            </svg>
                        </span>
                    </div>

                    <div class="rounded-bl-lg rounded-br-lg sm:rounded-bl-none relative group bg-blue-50 hover:bg-blue-100 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-cyan-500">
                        <div>
                            <i class="fad fa-shopping-bag fa-fw fa-3x text-blue-300"></i>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-lg font-medium">
                                <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Orders (DISABLED)
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                This feature requires agreeing to update the terms of Website Contract. You may automatically enable this feature by accepting the updated contract.
                            </p>
                        </div>
                        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection