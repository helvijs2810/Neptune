<x-layout>
    <div>
        @if ($user->profile_picture)

        @else
            <img src="" alt="">
        @endif
        <h2>Welcome back</h2>
        <h3>{{$user->first_name ." ". $user->last_name}}</h3>
    </div>
</x-layout>
