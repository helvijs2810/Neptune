<x-layout>
    <form action="/login" method="POST">
        @csrf
        <div class="w-3xl">
            <div class="space-y-3">
                <h2 class="text-2xl font-bold">Sign In: </h2>
                <x-form-input>Email: </x-form-input>
                <x-form-input>Password: </x-form-input>
            <div class="flex justify-end space-x-3">
                <x-form-cancel />
                <x-form-button>Login</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
