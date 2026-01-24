<div class="flex items-center justify-between border-deep-purple border-b px-2 py-4">
    <div class="flex flex-row items-center space-x-2">
        <img src="https://placehold.co/60" alt="Place Holder" />
        <a class="text-xl" href="/">Imaginary University Name</a>
    </div>
    <div class="inline-flex items-center space-x-4">
        <div class="space-x-2">
            @guest
                <x-nav-link href='/'>Home</x-nav-link>
                <x-nav-link href='/courses'>Courses</x-nav-link>
                <x-nav-link href='/contact'>Contact</x-nav-link>
            @endguest
            @auth
                <x-nav-link href='/dashboard'>Dashboard</x-nav-link>
                <x-nav-link href='/resources'>Resources</x-nav-link>
                <x-nav-link href='/assignments'>Assignments</x-nav-link>
            @endauth
        </div>
        <div class="inline-flex border-l border-deep-purple p-2">
            <div>
                @auth
                    @if(Auth::user()->profile_picture)
                        <img src="{{Storage::temporaryUrl(Auth::user()->profile_picture, now()->addMinutes(30))}}" alt="Place Holder" class="rounded-xl w-16"/>
                    @else
                        <img src="https://placehold.co/70" alt="Place Holder" />
                    @endif
                @endauth
                @guest
                    <img src="https://placehold.co/70" alt="Place Holder" />
                @endguest
            </div>
            <div class="flex-column ml-2">
                <p class="text-lg font-medium">Welcome back</p>
                @auth
                    <p class="text-md font-light">{{Auth::user()->first_name}} {{Auth::user()->last_name}} !</p>
                @endauth
                @guest
                    <p class="text-md font-light">Guest</p>
                @endguest
            </div>
            <div class="flex flex-col px-5 justify-between">
                @guest
                    <x-nav-link href='/login'>Sign In</x-nav-link>
                    <x-nav-link href='/register'>Register</x-nav-link>
                @endguest
                @auth
                    <x-nav-link href='/logout'>Sign Out</x-nav-link>
                    <x-nav-link href='/settings'>Settings</x-nav-link>
                @endauth
            </div>
        </div>
    </div>
</div>
