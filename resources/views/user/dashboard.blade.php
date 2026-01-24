<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div>
        <img src="{{$url}}" alt="{{$url}}" class="w-50 h-50" />
        <h2>Welcome back</h2>
        <h3>{{$user->first_name ." ". $user->last_name}}</h3>
    </div>
</x-layout>
