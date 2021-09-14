@extends('layouts.frontend')

@section('title')
    Register an Account
@endsection

@section('content')

    <div class="w-1/4 mx-auto p-4 bg-gray-50 rounded-lg shadow-md m-4">
        <div class="font-medium text-2xl flex justify-center my-4">
            @yield('title')
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" :value="__('Name')" />

                <div class="flex flex-row space-x-4">
                    <input id="name_first" class="block mt-1 w-full rounded-md" type="text" name="name_first" :value="old('name_first')" placeholder="First Name" required autofocus />
                    <input id="name_last" class="block mt-1 w-full rounded-md" type="text" name="name_last" :value="old('name_last')" placeholder="Last Name" required autofocus />
                </div>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" :value="__('Email')" />

                <input id="email" class="block mt-1 w-full rounded-md" type="email" name="email" :value="old('email')" placeholder="Email Address" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" :value="__('Password')" />

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" :value="__('Confirm Password')" />

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirm Password"
                                required />
            </div>

            <div class="flex items-center justify-between mt-4 space-x-8">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="bg-emerald-500 text-white px-2 py-1 rounded-md">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>

@endsection