<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <div class="flex flex-row w-4xl">
        <div class="flex flex-col">
            <div class="w-max">
                <img src="{{$url}}" alt="{{$url}}" class="w-50 h-50 mt-3 outline-3 outline-offset-2 hover:outline-offset-4 hover:outline-deep-purple/80 hover:opacity-80 transition-normal duration-70 outline-deep-purple" />
            </div>
            <h3 class="mt-2">{{$user->first_name ." ". $user->last_name}}</h3>
        </div>
        <div class="px-4 space-y-6">
            <div class="flex flex-row space-x-8 h-[30%]">
                <div class="flex flex-col w-full">
                    <h2>{{$time}}</h2>
                    <div class="flex flex-row">
                        <div class="w-[50%]">
                            <h4>Recently accessed: </h4>
                        </div>
                        <div class="w-[50%]">
                            <h4>Upcoming Assignments: </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <h2>Progress:</h2>
                    <div class="flex flex-row space-x-8">
                        <div>
                            <h4>Current Degree Results:</h4>
                            <p>No grade can be currently retrieved :&#40;</p>
                            <h4>Expected Degree Resuts:</h4>
                            <p>First Class Honours &#40;1st&#41;</p>
                        </div>
                        <div>
                            <h4>Current Module Progress:</h4>
                            <p>You have not applied to any courses yet.</p>
                            <h4>Latest Assessment Results:</h4>
                            <p>No assessments taken recently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
