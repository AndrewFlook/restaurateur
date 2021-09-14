@extends('layouts.account')

@section('title')
    Account Security
@endsection

@section('content')

    <form method="POST" action="{{ route('account.security.update', Auth::user()->id) }}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="bg-white shadow-md rounded-md w-1/2">
            <div class="bg-gray-100 p-4 rounded-t-md">
                <h3 class="text-lg font-medium">Password</h3>
                <p>We recommend changing your password on a regular basis.</p>
            </div>
            <div class="w-full flex flex-row space-x-4 p-4">
                <div class="flex flex-col block mt-1 w-full">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="text" name="new_password" id="new_password" value="" placeholder="New Password" autocomplete="new_password" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('new_password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300  focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required autofocus>
                    @error('new_password')
                        <p class="mt-2 text-sm text-red-600" id="old_password-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col block mt-1 w-full">
                    <label for="new_password_confirm" class="block text-sm font-medium text-gray-700">Confirm new password</label>
                    <input type="text" name="new_password_confirm" id="new_password_confirm" value="" placeholder="Confirm your new password" autocomplete="new_password_confirm" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('new_password_confirm') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required>
                    @error('new_password_confirm')
                        <p class="mt-2 text-sm text-red-600" id="old_password-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col block w-2/3 p-4">
                <label for="old_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                <input type="old_password" name="old_password" id="old_password" value="" autocomplete="old_password" placeholder="Current password" class="mt-1 block w-full border rounded-md shadow-sm py-2 px-3 focus:outline-none @error('old_password') focus:ring-red-500 focus:border-red-500 border-red-500 @else border-gray-300 focus:ring-emerald-500 focus:border-emerald-500 @enderror sm:text-sm" required>
                    @error('old_password')
                        <p class="mt-2 text-sm text-red-600" id="old_password-error">{{ $message }}</p>
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