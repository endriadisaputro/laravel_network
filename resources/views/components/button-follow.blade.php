<div class="mt-2">
    @if (Auth::user()->isNot($user))
    <form action="{{ route('following.store',$user) }}" method="post">
        @csrf
        <x-button>
            @if(Auth::user()->follows()->where('following_user_id',$user->id)->first())
            Unfollow
            @else
            Follow
            @endif
        </x-button>
    </form>
    @else
    <a href="{{ route('profile.edit') }}"
        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
        Edit Profile
    </a>
    <a href="{{ route('password.edit') }}"
        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
        Edit Password
    </a>
    @endif
</div>