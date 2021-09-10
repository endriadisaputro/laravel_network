<div class="flex justify-center">
    <a href="{{ route('profile', $user->username) }}" class="font-semibold text-center border-r border-l px-10 py-2">
        <div class="uppercase text-xs">Status</div>
        <div class="text-2xl">{{ $user->statuses->count() }}</div>
    </a>
    <a href="{{ route('profile.following',$user->username) }}" class="font-semibold text-center border-r px-10 py-2">
        <div class="uppercase text-xs">Following</div>
        <div class="text-2xl">{{ $user->follows->count() }}</div>
    </a>
    <a href="{{ route('profile.followers',$user->username) }}" class="font-semibold text-center border-r px-10 py-2">
        <div class="uppercase text-xs">Followers</div>
        <div class="text-2xl">{{ $user->followers->count() }}</div>
    </a>
</div>