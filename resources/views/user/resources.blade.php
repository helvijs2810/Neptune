<x-layout>
    @if (Auth::user()->courses->isEmpty())
    <div class="flex flex-col w-3xl justify-center space-y-2">
        <h3>Opps... No Course Found!</h3>
        <p>Looks like you either have yet to apply for a course or have not been approved for one yet.</p>
        <p>Use link below to browse courses and once selected one you like hit apply button below!</p>
        <x-link-button href="/courses">View All Courses</x-link-button>
    </div>
    @else
        <h3>Get Rick Rolled... or more like S3 is not going to work again in few days</h3>
    @endif
</x-layout>
