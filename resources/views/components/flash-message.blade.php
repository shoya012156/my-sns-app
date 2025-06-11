@props(['namespace'])

@php
  $sessionKey = "{$namespace}.success";
  $message = session($sessionKey);
@endphp
@if ($message)
  <div class="text-center px-4 py-2 text-2xl">
    {{ $message }}
  </div>
@endif
