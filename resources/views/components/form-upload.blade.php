<h4 {{$attributes(["class" => "text-md font-medium"])}}>{{$slot}}</h4>
<div {{$attributes(["class" => "flex items-center outline outline-deep-purple -outline-offset-1 rounded-md pl-3 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-800"])}}>
    <input {{$attributes(['class '=> "block min-w-0 grow py-1.5 pr-3 pl-1 text-base focus-within:outline-none"])}}>
</div>
