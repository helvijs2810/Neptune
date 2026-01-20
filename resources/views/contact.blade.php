<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="w-3xl">
            <div class="space-y-3">
                <h2 class="text-2xl font-bold">Contact Form: </h2>
                <p>Please fill in information below, or access my social media on links below to reach me out. &#x1F60E;</p>
                <div class="space-y-3 w-lg">
                    <x-form-input placeholder="name@example.com">Email Address: </x-form-input>
                    <x-form-input placeholder="Free Coffee?">Subject: </x-form-input>
                </div>
                <h4 class="text-md font-medium">Message:</h4>
                <textarea cols="60" rows="7" class="outline py-1.5 pr-3 outline-deep-purple -outline-offset-1 rounded-md pl-3 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-800 col-span-4" placeholder="I was promissed a free coffee, so where is it?">
                </textarea>
            <div class="flex justify-end space-x-3">
                <x-form-cancel />
                <x-form-button>Send Message</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
