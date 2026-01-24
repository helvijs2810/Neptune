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
    <x-navbar />
    <div class="flex w-full h-full justify-center py-8">
        {{$slot}}
    </div>
    <x-footer/>
    @livewireScripts
</body>
</html>
