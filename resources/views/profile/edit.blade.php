<!DOCTYPE html>
<html lang="ja">
@include('layouts.head')

<body>
  <div class="py-12 flex flex-col max-w-xl mx-auto my-0">
    <x-flash-message namespace="profile"/>
    <x-return-button></x-return-button>
    <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-profile-information-form')
        </div>
      </div>
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-password-form')
        </div>
      </div>
    </div>
  </div>
</body>

</html>
