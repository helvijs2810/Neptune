

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <title>{{$title ?? config('app.name') }}</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
    @livewireStyles
</head>
<body class="flex flex-col px-4 py-4 h-full font-nunito text-deep-purple font-light">
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
                    <x-nav-link href='/course'>Course</x-nav-link>
                    <x-nav-link href='/Assignments'>Assignments</x-nav-link>
                @endauth
            </div>
            <div class="inline-flex border-l border-deep-purple p-2">
                <div>
                    <img src="https://placehold.co/60" alt="Place Holder" class="rounded-xl"/>
                </div>
                <div class="flex-column ml-2">
                    <p class="text-lg font-medium">Welcome back</p>
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
    <div class="flex w-full h-full justify-center py-8">
        {{$slot}}
    </div>
    <x-footer/>
    @livewireScripts
</body>
</html>
