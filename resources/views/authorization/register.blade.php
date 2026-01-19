<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="w-3xl">
            <div class="space-y-3">
                <h2 class="text-2xl font-bold">User Registration Form: </h2>
                <p>Please fill in form below.</p>
                <x-form-input>Forename: </x-form-input>
                <x-form-input>Surname: </x-form-input>
                <h4 class="text-md">User Type: </h4>
                <div class="flex flex-row space-x-10">
                    <x-form-radio-check name="account_type">Student</x-form-radio-check>
                    <x-form-radio-check name="account_type">Teacher</x-form-radio-check>
                </div>
                <x-form-input type='email' placeholder="name@example.com">Email: </x-form-input>
                <x-form-input type='email' name='email_confirmation' id='email_confirmation'>Confirm Email: </x-form-input>
                <x-form-input type='password'>Password: </x-form-input>
                <x-form-input type='password' name='password_confirmation' id='password_confirmation'>Confirm Password: </x-form-input>
            <div class="flex justify-end space-x-3">
                <x-form-cancel />
                <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
