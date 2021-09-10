<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-8">
                <x-card>
                    <form action="{{ route('status.store') }}" method="post">
                        @csrf
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full mr-3" src="{{ Auth::user()->gravatar() }}" alt="">
                            </div>
                            <div class="w-full">
                                <div class="font-semibold">
                                    {{ Auth::user()->name }}
                                </div>
                                <div my-3>
                                    <textarea
                                        class="w-full rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200 border-gray-300"
                                        name="body" id="body" placeholder="What is on Your mind?"></textarea>
                                </div>
                                <div class="text-right">
                                    <x-button>Post</x-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </x-card>
                <div class="space-y-6 my-5">
                    <div class="space-y-5">
                        <x-statuses :statuses="$statuses"></x-statuses>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <x-card>
                    <h1 class="font-semibold mb-5">Recently Follows</h1>
                    <div class="space-y-6">
                        <x-following :users="Auth::user()->follows()->limit(5)->get()"></x-following>
                    </div>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>