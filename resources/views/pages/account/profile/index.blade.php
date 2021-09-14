@extends('layouts.account')

@section('title')

@endsection

@section('content')

    <form method="POST" action="{{ route('account.profile.update', Auth::user()->id) }}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="bg-white shadow-md rounded-md w-1/2">
            <div class="bg-gray-100 p-4 rounded-t-md">
                <h3 class="text-lg font-medium">Personal Information</h3>
            </div>
            <div class="w-full flex flex-row space-x-4 p-4">
                <div class="flex flex-col block mt-1 w-full">
                    <label for="name_first" class="block text-sm font-medium text-gray-700">First name</label>
                    <input type="text" name="name_first" id="name_first" value="{{ Auth::user()->name_first }}" placeholder="First Name" autocomplete="name_first" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('name_first') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300  focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required autofocus>
                    @error('name_first')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col block mt-1 w-full">
                    <label for="name_last" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="name_last" id="name_last" value="{{ Auth::user()->name_last }}" placeholder="Last Name" autocomplete="name_last" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('name_last') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required>
                    @error('name_last')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col block w-2/3 p-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" autocomplete="email" placeholder="Email" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('email') focus:ring-red-500 focus:border-red-500 border-red-500 @else border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
            </div>
            <div class="px-4 py-3 bg-gray-50 flex flex-row justify-between sm:px-6 rounded-b-md items-center">
                <div class="{{ session('message') ? 'visible' : 'invisible' }} text-emerald-500">{{ session('message') }}</div>
                <button type="submit" class="text-right bg-emerald-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                    Save
                </button>
            </div>
        </div>
    </form>

@endsection