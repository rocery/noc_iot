<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-xl font-bold">My App</a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="text-white mr-4">Login</a>
                    <a href="{{ route('register') }}" class="text-white">Register</a>
                @else
                    <a href="{{ route('account') }}" class="text-white mr-4">{{ Auth::user()->name }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>