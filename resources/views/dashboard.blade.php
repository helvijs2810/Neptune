<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div class="flex flex-row w-4xl">
        <div class="flex flex-col">
            <div class="w-max">
                <img
                src="{{Storage::temporaryUrl(Auth::user()->profile_picture, now()->addMinutes(30))}}"
                alt="Profile Picture"
                class="w-50 h-50 mt-3 outline-3 outline-offset-2 hover:outline-offset-4 hover:outline-deep-purple/80 hover:opacity-80 transition-normal duration-70 outline-deep-purple"
                />
            </div>
            <h3 class="mt-2">{{Auth::user()->first_name ." ". Auth::user()->last_name}}</h3>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-2 grid-rows-4 space-x-6 space-y-6">
                <h4>Recently accessed: </h4>
                <h4>Upcoming Assignments: </h4>
                <p>None</p>
                <p>None</p>
                <h4>Recent Results:</h4>
                <h4>Modules Complete:</h4>
                <p>No assessments currently taken.</p>
                <p>No modules taken</p>
            </div>
        </div>
    </div>
</x-layout>
