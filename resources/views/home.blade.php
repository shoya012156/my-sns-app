@extends('layouts.base')

@section('title','トップページ')

@section('main')
<form action="post" class="border-t-2 border-b-2 border-gray-100 text-right">
  <textarea type="text" name="tweet" id="tweet" class="resize-none w-full h-32 text-xl  border-none outline-none focus:outline-none focus:ring-gray-100 focus:border-gray-100"></textarea>
  <x-button/>
</form>
<div>
  <article class="flex gap-2 px-6 py-3 hover:bg-gray-100 border-b-2 border-gray">
    <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14 leading-none">
    <div class="mt-2 flex flex-col gap-1">
      <p class="font-semibold text-lg">久保建英</p>
      <p class="tracking-wide pb-2">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ</p>
      <a href="" class="text-right underline hover:text-blue-300">リプライする</a>
    </div>
  </article>
</div>
@endsection