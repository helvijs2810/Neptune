@props(['courseid' => '', 'title' => '', 'length' => '', 'offer' => '', 'start' => ''])

<div class="space-y-2 p-2 mb-2 outline-2 outline-white border-b border-b-deep-purple hover:border-b-transparent hover:outline-deep-purple transition-colors duration-300 rounded-md hover:text-deep-purple/80 text-deep-purple">
    <a href="/courses/{{$courseid}}">
        <div class="pb-2">
            <p class="font-bold text-lg">{{$title}}</p>
        </div>
        <x-course-info length="{{$length}}" offer="{{$offer}}" start="{{$start}}" />
    </a>
</div>
