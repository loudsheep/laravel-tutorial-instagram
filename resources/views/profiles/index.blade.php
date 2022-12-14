@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class=" rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class=" d-flex justify-content-between align-items-center">
                <h1>
                    {{ $user->username }}
                </h1>

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                @can('update', $user->profile)
                <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>{{ $user->following->count() }}</strong> following</div>
                <div class="pe-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
            </div>
            <div class="pt-4 fw-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <hr>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection