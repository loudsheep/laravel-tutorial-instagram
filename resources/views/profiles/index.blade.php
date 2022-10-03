@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i.pinimg.com/originals/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg" alt="" class=" rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class=" d-flex justify-content-between align-items-center">
                <h1>
                    {{ $user->username }}
                </h1>
                <a href="/p/create">Add new post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>102</strong> following</div>
                <div class="pe-5"><strong>20</strong> follows</div>
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