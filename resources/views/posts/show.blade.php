@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class=" w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="max-width: 50px;" class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle">
                    </div>
                    <div>
                        <div class="fw-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }} </a></div>
                    </div>
                </div>

                <hr>

                <span class="fw-bold"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }} </a></span>

                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection