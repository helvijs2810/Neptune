@props(['icon' => ''])

<a {{$attributes(["class" => "flex flex-row items-center space-x-2 hover:opacity-60 transition-opacity duration-300"])}}>
    @if (!($icon === ''))
        {{svg($icon)}}
    @endif
    <p class="text-md">{{$slot}}</p>
</a>
