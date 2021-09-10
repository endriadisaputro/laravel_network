@foreach ($statuses as $status)
<x-card>
    <div class="flex">
        <div class="flex-shrink-0">
            <img class="w-10 h-10 rounded-full mr-3" src="{{ $status->user->gravatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold">
                {{ $status->user->name }}
            </div>
            <div class="leading-relaxed">
                {{ $status->body }}
            </div>
            <div class="text-gray-400 text-sm">
                {{ $status->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
</x-card>
@endforeach