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
                <a href="/about" class="font-normal text-xl px-2 py-1 border-2 border-deep-purple rounded-xl hover:bg-deep-purple hover:text-white transition-colors duration-300">About</a>
                <a href="/contact" class="font-normal text-xl px-2 py-1 border-2 border-deep-purple rounded-xl hover:bg-deep-purple hover:text-white transition-colors duration-300">Contact</a>
            </div>
        </div>
    </div>
</x-layout>
