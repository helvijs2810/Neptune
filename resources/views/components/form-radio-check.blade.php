@props(['type' => 'radio'])

<div class="flex flex-row space-x-2">
    <p {{$attributes(["class" => "text-md"])}}>{{$slot}}</p>
    <input {{$attributes(["class" => "accent-deep-purple", "type" => $type])}}>
</div>

