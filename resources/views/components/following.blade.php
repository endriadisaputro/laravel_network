@foreach ($users as $user)
<x-card>
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <img class="w-10 h-10 rounded-full mr-3" src="{{ $user->gravatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold">
                {{ $user->name }}
            </div>
            <div class="mt-2">
                <form action="{{ route('following.store',$user) }}" method="post">
                    @csrf
                    <x-button>
                        @if(Auth::user()->follows()->where('following_user_id',$user->id)->first())
                            Unfollow
                        @else
                            + Follow
                        @endif
                    </x-button>
                </form>
            </div>
            <div class="text-gray-400 text-sm">
                @if($user->pivot)
                {{ $user->pivot->created_at->diffForHumans() }}
                @endif
            </div>
        </div>
    </div>
</x-card>
@endforeach