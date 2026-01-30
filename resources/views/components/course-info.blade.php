@props(['length' => 'a', 'offer' => 'b', 'start' => 'c'])

<div {{$attributes(["class" => "grid grid-cols-3 pb-2"])}}>
    <p><strong>Length: </strong>{{$length}} {{$length > 1 ? "years" : "year"}}</p>
    <p><strong>Offer: </strong>{{$offer}}</p>
    <p><strong>Start: </strong>{{ucfirst($start)}}</p>
</div>
