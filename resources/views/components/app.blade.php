<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameDock</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-b-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="/logo.svg" alt="GameDock" class="w-32 flex-none">
                </a>
                <ul class="flex space-x-4 ml-0 lg:ml-16 mt-2 lg:mt-0">
                    <li><a href="/" class="hover:text-gray-400">Games</a></li>
                    <li><a href="/" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="/" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-4 lg:mt-0">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full pl-6 py-1 focus:outline-none" placeholder="Search..." />
                    <div class="absolute top-0 h-full flex items-center ml-2">
                        <svg class="fill-current text-gray-400 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6 .1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="/avatar.jpg" alt="avatar" class="w-8 rounded-full"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-6">
        {{ $slot }}
    </main>

    <footer class="border-t border-t-gray-800">
        <div class="container mx-auto px-4 py-6 flex items-center justify-center">
            Powered by <a href="#" class="underline ml-2 hover:text-gray-400">IGDB API</a>
        </div>
    </footer>
</body>
</html>
