<x-app-layout>
    <x-container>
        <div class="grid grid-cols-4 gap-5 mb-5">
            <x-following :users="$users" />
        </div>
        <div class="mb-5">
            {{ $users->links() }}
        </div>
    </x-container>
</x-app-layout>