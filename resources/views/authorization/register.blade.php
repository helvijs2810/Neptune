<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="w-3xl">
            <div class="space-y-3">
                <div class="w-lg space-y-3">
                    <h2 class="text-2xl font-bold">User Registration Form: </h2>
                    <p>Please fill in form below.</p>
                    <x-form-input placeholder="John" id='first_name' name='first_name' :value="old('first_name')" required>Forename: </x-form-input>
                    <x-form-error name='first_name'/>
                    <x-form-input placeholder="Smith" id='last_name' name='last_name' :value="old('last_name')" required>Surname: </x-form-input>
                    <x-form-error name='last_name'/>
                    <h4 class="text-md font-medium">User Type: </h4>
                    <div class="flex flex-row space-x-10">
                        <x-form-radio-check name="account_type" value="student" checked>Student</x-form-radio-check>
                        <x-form-error name="account_type" />
                        <x-form-radio-check name="account_type" value="teacher">Teacher</x-form-radio-check>
                    </div>
                    <x-form-input type='email' placeholder="name@example.com" name='email' id='email' :value="old('email')" required>Email: </x-form-input>
                    <x-form-error name='email'/>
                    <x-form-input type='email' name='email_confirmation' id='email_confirmation' name='email_confirmation' :value="old('email_confirmation')" required>Confirm Email: </x-form-input>
                    <x-form-error name='email_confirmation'/>
                    <x-form-input type='password' name='password' id='password' required>Password: </x-form-input>
                    <x-form-error name='password'/>
                    <x-form-input type='password' name='password_confirmation' id='password_confirmation' required>Confirm Password: </x-form-input>
                    <x-form-error name='password_confirmation'/>
                </div>
            </div>
            <div class="flex justify-end space-x-3">
                <x-form-cancel />
                <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
