<x-app-layout>
    @slot('header')
    <h1 class="font-semibold text-xl">
        Change Your Password
    </h1>
    @endslot

    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2 mb-5">
                <x-card>
                    <form action="{{ route('password.edit') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-5">
                            <x-label for="current_password">Current Password</x-label>
                            <x-input type="password" class="w-full h-10" name="current_password" id="current_password">
                            </x-input>
                            @error('current_password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="password">New Password</x-label>
                            <x-input type="password" class="w-full h-10" name="password" id="password">
                            </x-input>
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="password_confirmation">Confirm Password</x-label>
                            <x-input type="password" class="w-full h-10" name="password_confirmation" id="password_confirmation">
                            </x-input>
                            @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-button>Change Password</x-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>