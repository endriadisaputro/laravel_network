<x-app-layout>
    @slot('header')
    <h1 class="font-semibold text-xl">Update Your Profile Information</h1>
    @endslot
    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2 mb-5">
                <x-card>
                    <form action="{{ route('profile.update') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-5">
                            <x-label for="username">Username</x-label>
                            <x-input value="{{ old('username',Auth::user()->username) }}" class="mt-1 w-full h-10" type="text" name="username" id="username"></x-input>
                            @error('username')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="name">Name</x-label>
                            <x-input value="{{ old('name',Auth::user()->name) }}" class="mt-1 w-full h-10" type="text" name="name" id="name"></x-input>
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="email">Email</x-label>
                            <x-input value="{{ old('email',Auth::user()->email) }}" class="mt-1 w-full h-10" type="email" name="email" id="email"></x-input>
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-button>Update</x-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>