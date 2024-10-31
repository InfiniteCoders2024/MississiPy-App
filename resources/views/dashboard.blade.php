<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        Welcome {{ Auth::user()->name }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<br>
<div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
<div class="text-center mt-4">
    <button onclick="window.location.href='/author'" class="btn btn-primary">
        View Authors
    </button>
    <button onclick="window.location.href='/book'" class="btn btn-primary">
        View Books
    </button>
    <button onclick="window.location.href='/electronic'" class="btn btn-primary">
        View Electronics
    </button>
    <button onclick="window.location.href='/order'" class="btn btn-primary">
        View Orders
    </button>
</div>
