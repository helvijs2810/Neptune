<x-layout>
    <div class="w-3xl space-y-3">
        <div>
            <h2 class="font-bold text-4xl pt-2">{{$course->title}}</h2>
        </div>
        <div class="flex justify-between pb-2">
            <p><strong>Length: </strong> {{$course['length']}} years.</p>
            <p><strong>Offer: </strong> {{$course['offer']}}</p>
            <p><strong>Start: </strong> {{$course['start']}}</p>
        </div>
        <h3 class="font-bold text-3xl">About this course</h3>
        <p>{{$course->description}}</p>
        <h3 class="font-bold text-3xl pt-2">What will you learn</h3>
        <ul class="*:text-deep-purple list-disc list-inside">
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Dolor</li>
            <li>Sit</li>
            <li>Amet</li>
            <li>Consecterus</li>
        </ul>
        <h3 class="font-bold text-3xl pt-2">Course Content</h3>
        <div>
            <div class="flex justify-between p-2 mb-4 bg-deep-purple *:text-white">
                <h3>Module Name</h3>
                <h3>Credits</h3>
            </div>
            @if($course->modules->isEmpty())
                <p>Section is work in progress...</p>
            @else
                @foreach ($course->modules as $module)
                <div class="flex justify-between space-y-2 border-b border-b-deep-purple/20 mb-4">
                    <a href="/" class="text-deep-purple underline hover:decoration-2">{{$module['title']}} ({{$module['code']}})</a>
                    <p>{{$module['credits']}}</p>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</x-layout>
