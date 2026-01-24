<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>

    <form action="/login" method="POST">
        @csrf
        <div class="w-3xl">
            <div class="space-y-3">
                <div class="space-y-3 w-lg">
                    <h2 class="text-2xl font-bold">Sign In: </h2>
                    <x-form.input type="email" name="email" placeholder="john@smith.com" :value="old('email')" required>Email: </x-form.input>
                    <x-form.error name="email" />
                    <x-form.input type="password" name="password" required>Password: </x-form.input>
                    <x-form.error name="password" />
                    <x-form.error name="bad_details" />
                </div>
            </div>
            <div class="flex justify-end space-x-3">
                <x-form.cancel />
                <x-form.button>Login</x-form.button>
            </div>
        </div>
    </form>
</x-layout>
