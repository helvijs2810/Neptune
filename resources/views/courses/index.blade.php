<x-layout>
    <div class="flex flex-col py-3 px-4 justify-center h-[50%]">
        <form class="p-2">
            <label for="search-bar" class="font-bold text-lg underline">Search course:</label>
            <input id="search-bar" type="search" class="border-2 border-deep-purple/80 w-full rounded-md text-xl outline-none focus:border-indigo-800 p-2">
        </form>
        <div class="p-2">
            <from class="grid grid-cols-2 grid-rows-3 *:m-1 w-fit">
                <h3 class="font-bold text-lg underline col-span-2">Study Level</h3>
                <p class="text-lg">Undergraduate: </p>
                <input type="radio" id="undergrad" class="accent-red-400" name="course_level">
                <p class="text-lg" >Postgraduate: </p>
                <input type="radio" id="postgrad" class="accent-red-400" name="course_level">
            </from>
        </div>
        <div class="p-2 flex flex-col">
            <h3 class="font-bold text-lg underline">Start Date</h3>
            <div class="grid grid-cols-2 grid-rows-2 *:m-1 w-fit">
                <p class="text-lg">September: </p>
                <input type="checkbox" id="sepstart" class="accent-red-400">
                <p class="text-lg">January: </p>
                <input type="checkbox" id="janstart" class="accent-red-400">
            </div>
        </div>
    </div>
    <div class="space-y-10 py-3 w-3xl">
        @foreach ($courses as $course)
            <div class="space-y-2 border-b border-b-deep-purple/20 p-2">
                <div class="pb-2">
                    <a class="font-bold text-lg text-deep-purple underline hover:decoration-2" href="/courses/{{$course['id']}}">{{$course['title']}}</a>
                </div>
                <div class="flex justify-between pb-2">
                    <p><strong>Length: </strong> {{$course['length']}} years.</p>
                    <p><strong>Offer: </strong> {{$course['offer']}}</p>
                    <p><strong>Start: </strong> {{$course['start']}}</p>
                </div>
            </div>
        @endforeach

    <div>
        {{$courses->links()}}
    </div>

    </div>
</x-layout>
