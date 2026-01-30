<x-layout>
    @if (Auth::user()->courses->isEmpty())
    <div class="w-3xl">
        <h1>No courses found...</h1>
        <div class="mt-2 mb-8">
            <p>If you have applied to a course, you have to wait to get approved.</p>
            <p>If you haven't applied to any courses yet, use button below to do so.</p>
        </div>
        <x-link-button href="/courses">See All Courses</x-link-button>
    </div>
    @else
        <div class="w-3xl space-y-3">
            @foreach (Auth::user()->courses as $course)
                <h1>{{$course->title}}</h1>
                <h2>Modules: </h2>
                <div class="flex flex-col space-y-3">
                    @foreach ($course->modules as $module)
                        <a href="/" class="text-deep-purple text-2xl underline hover:decoration-2">{{$module->title}} ({{$module->code}})</a>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endif
</x-layout>
