@extends('layouts.frontend')

@section('title')
    Forgot Password
@endsection

@section('content')

    <div class="w-1/4 mauto p-4 bg-gray-50 rounded-lg shadow-md m-4">
        <div class="font-medium text-2xl flex justify-center my-4">
            @yield('title')
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" />

                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>

@endsection