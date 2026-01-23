<x-layout>
    <div>
        @if ($user->profile_picture)
            <img src="{{$url}}" alt="{{$url}}" />
        @else
            <img src="https://placehold.co/100" alt="profile_image" />
        @endif
        <h2>Welcome back</h2>
        <h3>{{$user->first_name ." ". $user->last_name}}</h3>
    </div>
</x-layout>
