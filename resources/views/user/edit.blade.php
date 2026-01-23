<x-layout>
    <div class="w-3xl">
        <h3>General Details</h3>
        <p>Use form below to update your personal settings: </p>
        <form action="/settings" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="w-lg">
                <x-form-input id="first_name" name="first_name" value="{{$user->first_name}}">Name: </x-form-input>
                <x-form-error name='first_name'/>
                <x-form-input id="last_name" name="last_name" value="{{$user->last_name}}">Surname: </x-form-input>
                <x-form-error name='last_name'/>
            </div>
            <div>
                <input
                id="profile_picture"
                name="profile_picture"
                type="file" accept=".png, .jpg, .jpeg"
                class="file:mr-4 file:bg-deep-purple file:text-white file:font-medium file:rounded-xl file:px-2 file:py-1.5 my-4 "
                value="{{$user->profile_picture}}"
                />
            </div>
            <x-form-error name='profile_picture'/>
            <div class="flex flex-row justify-end">
                <x-form-cancel href="/dashboard" />
                <x-form-button>Submit</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
