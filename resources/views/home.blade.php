@extends('layouts.base')

@section('title','トップページ')

@section('main')
<form action="{{ route('tweets.store') }}" method="POST" class="border-t-2 border-b-2 border-gray-100 text-right">
  @csrf
  <textarea type="text" name="tweet" id="tweet" class="resize-none w-full h-32 text-xl  border-none outline-none focus:outline-none focus:ring-gray-100 focus:border-gray-100"></textarea>
  <x-button/>
</form>
<div>
  @foreach ($tweets as $tweet)
  <article class="flex gap-2 px-6 py-3 hover:bg-gray-100 border-b-2 border-gray">
    <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14 leading-none">
    <div class="mt-2 flex flex-col gap-1 w-full">
      <p class="font-semibold text-lg">{{ $tweet->user->first_name }}{{ $tweet->user->last_name }}</p>
      <p class="tracking-wide pb-2">{{ $tweet->tweet }}</p>
      <a href="" class="text-right underline hover:text-blue-300">リプライする</a>
    </div>
  </article>  
  @endforeach
</div>
@endsection