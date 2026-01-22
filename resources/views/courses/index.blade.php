<x-layout>
    <x-slot:title>
        Courses
    </x-slot:title>

    <div class="flex h-[70%]">
    <div class="h-fit flex">
        <div class="space-y-3 w-sm py-3 px-2 h-fit mr-4 z-10 bg-white border-deep-purple border rounded-md">
            <form class="p-2">
                <x-form-input class="font-medium text-lg pb-2">Search </x-form-input>
            </form>
            <div class="px-2">
                <from class="grid grid-cols-2 grid-rows-2 *:mb-2 w-fit space-x-5">
                    <h4 class="col-span-2">Study Level</h4>
                    <x-form-radio-check name="study_level">Undergraduate: </x-form-radio-check>
                    <x-form-radio-check name="study_level">Postgraduate: </x-form-radio-check>
                </from>
            </div>
            <div class="p-2 flex flex-col">
                <h4>Start Date</h4>
                <div class="grid grid-cols-2 grid-rows-1 *:mb-2 w-fit space-x-5">
                    <x-form-radio-check type="checkbox">September: </x-form-radio-check>
                    <x-form-radio-check type="checkbox">January: </x-form-radio-check>
                </div>
            </div>
        </div>
        <div class="w-[384px] h-74 z-0 bg-deep-purple mt-2 ml-2 rounded-md absolute"></div>
    </div>
    <div class="py-3 w-3xl h-fit">
        @foreach ($courses as $course)
            <div class="space-y-2 p-2 mb-2 outline-2 outline-white border-b border-b-deep-purple hover:border-b-transparent hover:outline-deep-purple transition-colors duration-300 rounded-md hover:text-deep-purple/80 text-deep-purple">
                <a href="/courses/{{$course['id']}}">
                    <div class="pb-2">
                        <p class="font-bold text-lg">{{$course['title']}}</p>
                    </div>
                    <div class="flex justify-between pb-2">
                        <p><strong>Length: </strong> {{$course['length']}} years.</p>
                        <p><strong>Offer: </strong> {{$course['offer']}}</p>
                        <p><strong>Start: </strong> {{$course['start']}}</p>
                    </div>
                </a>
            </div>
        @endforeach

    <div>
        {{$courses->links()}}
    </div>

    </div>
    </div>
</x-layout>
