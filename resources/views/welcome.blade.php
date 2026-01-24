<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="flex items-center">
        <div class="flex flex-col w-2xl space-y-4">
            <h1 class="font-normal text-6xl">Welcome to the Project Neptune</h1>
            <p>A new open source learning platform aiming to modernize and improve on already existing services such as Moodle.</p>
            <p>This is more of a proof of concept project rather than any serious attempt at making a competitor, more something done just for fun.</p>
            <p>Want to find more about features or just talk? Use links below to navigate to desired section! </p>
            <div class="space-x-5">
                <x-link-button href="/about">About</x-link-button>
                <x-link-button href="/contact">Contact</x-link-button>
            </div>
        </div>
    </div>
</x-layout>
