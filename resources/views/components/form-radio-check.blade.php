@props(['type' => 'radio'])

<div class="flex flex-row space-x-2">
    <p {{$attributes(["class" => "text-lg"])}}>{{$slot}}</p>
    <input type={{$type}} {{$attributes(["class" => "accent-deep-purple"])}}>
</div>

