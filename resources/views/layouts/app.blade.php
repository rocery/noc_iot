<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css') <!-- Local Tailwind -->
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-blue-600 text-2xl font-semibold">My App</a>
            <div class="space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
                @else
                    <a href="{{ route('account') }}" class="text-blue-600 font-medium">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 hover:underline">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto mt-6 px-4">
        @yield('content')
    </main>

</body>
</html>
