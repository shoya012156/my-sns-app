<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
  <div class="grid grid-cols-[200px,1fr] max-w-5xl h-auto mx-auto my-0 relative">
    <aside class="h-screen sticky top-0 flex flex-col justify-between overflow-hidden">
      <h1>
        <a href="">
          <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
      </h1>
      <ul class="flex flex-col mt-6 text-2xl font-bold gap-6 justify-center">
        <li><a href="">ホーム</a></li>
        <li><a href="">プロフィール</a></li>
        <li><a href="">ログアウト</a></li>
      </ul>
      <div class="flex items-center">
        <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14">
        <p class="text-lg">{{ Auth::user()->first_name }}{{ Auth::user()->last_name }}</p>
      </div>
      </aside>
      <main class="border-r-2 border-l-2 border-gray max-w-[600px] overflow-scroll hidden-scrollbar h-screen">
        @yield('main')
      </main>
    </div>
</body>
</html>