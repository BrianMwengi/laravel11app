<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
  <!-- Display the user's profile information -->
        {{-- 'name',
        'age',
        'phone number',
        'address', --}}
    <!--loop over the profiles table and display the above information-->
    <div class="container mx-auto py-8"> 
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> 
          @foreach ($profiles as $profile)
              <div class="bg-white rounded-lg shadow-md p-6"> 
                  <h1>{{ $profile->name }}</h1>
                  <h2 class="text-gray-600">{{ $profile->age }}</h2> 
                  <h3 class="text-gray-600">{{ $profile->phone_number }}</h3>
                  <h4 class="text-gray-600">{{ $profile->address }}</h4>
              </div>
          @endforeach
        </div>
    </div>
</x-app-layout>
