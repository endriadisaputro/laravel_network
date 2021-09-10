<x-app-layout>
    <div class="border-b -mt-8 py-5 justify-center flex">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mr-5">
                    <img class="rounded-full border-2 border-blue-500 p-1" src="{{ $user->gravatar() }}" alt="">
                </div>
                <div>
                    <div>
                        <h1 class="mt-3 font-bold">{{ $user->name }}</h1>
                    </div>
                    <div class="text-sm text-gray-500">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </div>
                    <x-button-follow :user="$user"/>
                </div>
            </div>
        </x-container>
    </div>
    <div class="border-b">
        <x-container>
            <x-statistic :user="$user"></x-statistic>
        </x-container>
    </div>
    <x-container>
        <div class="space-y-5 py-5">
            <x-statuses :statuses="$statuses"></x-statuses>
        </div>
    </x-container>
</x-app-layout>