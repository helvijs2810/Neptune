<x-layout>
    @if (Auth::user()->courses->isEmpty())
        <x-unassigned />
     @else
        <h3>Get Rick Rolled... or more like S3 is not going to work again in few days</h3>
    @endif
</x-layout>

