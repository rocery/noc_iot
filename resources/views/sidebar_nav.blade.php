<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .active{
                @apply bg-gray-200;
            }
        </style>
    </head>
    <body>
        <nav class="bg-gray-800">
            <div class="container mx-auto p-2">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img src="https://picsum.photos/100" class="rounded-full mr-2" alt="">
                        
                    </div>
                    <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded" id="toggle-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container mx-auto p-2">
            <div class="flex">
                <div class="w-1/5 bg-gray-200 p-2" id="sidebar">
                    <ul>
                        <li class="py-2 {{ request()->routeIs('sidebar_nav') ? 'active' : '' }}">
                            <a href="{{ route('sidebar_nav') }}" class="block px-2">Dashboard</a>
                        </li>
                        <li class="py-2 {{ request()->routeIs('sidebar_nav') ? 'active' : '' }}">
                            <a href="{{ route('sidebar_nav') }}" class="block px-2">Iot</a>
                        </li>
                        <li class="py-2 {{ request()->routeIs('sidebar_nav') ? 'active' : '' }}">
                            <a href="{{ route('sidebar_nav') }}" class="block px-2">Device</a>
                        </li>
                        <li class="py-2 {{ request()->routeIs('sidebar_nav') ? 'active' : '' }}">
                            <a href="{{ route('sidebar_nav') }}" class="block px-2">Data</a>
                        </li>
                        <li class="py-2 {{ request()->routeIs('sidebar_nav') ? 'active' : '' }}">
                            <a href="{{ route('sidebar_nav') }}" class="block px-2">Network</a>
                        </li>
                    </ul>
                </div>
                <div class="w-4/5 p-2">
                    @yield('content')
                </div>
            </div>
        </div>
        <script>
            const button = document.getElementById('toggle-sidebar');
            const sidebar = document.getElementById('sidebar');

            button.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
            });
        </script>
    </body>
</html>
