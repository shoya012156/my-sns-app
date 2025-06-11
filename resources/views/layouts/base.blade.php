<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body>
  <x-flash-message namespace="login" />
  <x-flash-message namespace="register" />

  <div class="grid grid-cols-[200px,1fr] max-w-5xl h-auto mx-auto my-0 relative">
    <aside class="h-screen sticky top-0 flex flex-col justify-between overflow-hidden py-4">
      <h1>
        <a href="">
          <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
      </h1>
      <ul class="flex flex-col mt-6 text-2xl font-bold gap-6 justify-center">
        <li><a href="{{ route('home') }}">ホーム</a></li>
        <li><a href="{{ route('profile.edit') }}">プロフィール</a></li>
      </ul>
      <div class="flex flex-col">
        <div class="flex items-center">
          <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14">
          <p class="text-lg tracking-wide">{{ Auth::user()->first_name }}{{ Auth::user()->last_name }}</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit"
            class="py-2 px-6 mt-2 bg-black text-white rounded-3xl cursor-pointer hover:bg-gray-900">ログアウト</button>
        </form>
      </div>
    </aside>
    <main class="border-r-2 border-l-2 border-gray max-w-[600px] overflow-scroll hidden-scrollbar h-screen">
      @yield('main')
    </main>
  </div>
</body>

</html>
