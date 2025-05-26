@extends('layouts.base')

@section('title','リプライ')

@section('main')
<div class="flex flex-col gap-2 px-6 py-6">
  <div class="flex items-center">
    <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14 leading-none">
    <p class="font-semibold text-lg">{{ $tweet->user->first_name }}{{ $tweet->user->last_name }}</p>
  </div>
  <p class="tracking-wide pb-2 pl-2 text-xl">{{ $tweet->tweet }}</p>
</div>
<form action="{{ route('replies.store') }}" method="post" class="border-t-2 border-b-2 border-gray-100 text-right">
  @csrf
  <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
  <textarea name="reply" id="reply" class="resize-none w-full h-32 text-xl border-none outline-none focus:outline-none focus:ring-gray-100 focus:border-gray-100"></textarea>
  <x-button value="返信する"/>
</form>
@foreach ($tweet->replies as $reply)
<div class="flex flex-col gap-2 px-6 py-6 border-b-2 border-gray">
  <div class="flex items-center">
    <img src="{{ asset('images/user-icon.png') }}" alt="" class="h-14 leading-none">
    <p class="font-semibold text-lg">{{ $reply->user->first_name }}{{ $reply->user->last_name }}</p>
  </div>
  <p class="tracking-wide pb-2 pl-2 text-xl">{{ $reply->reply }}</p>
</div>
@endforeach
@endsection