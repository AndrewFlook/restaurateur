@extends('layouts.frontend')

@section('title')
    Confirm Password
@endsection

@section('content')

    <div class="w-1/4 mx-auto p-4 bg-gray-50 rounded-lg shadow-md m-4">
        <div class="font-medium text-2xl flex justify-center my-4">
            @yield('title')
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <label for="password" :value="__('Password')" />

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <button>
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>

@endsection