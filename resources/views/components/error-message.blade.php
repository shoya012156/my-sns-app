@props(['field'])

@error($field)
<div class="text-base text-red-500 text-left">
  {{$message}}
</div>

@enderror
