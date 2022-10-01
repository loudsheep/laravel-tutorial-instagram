@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i.pinimg.com/originals/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg" alt="" class=" rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1> {{ $user->usernameProfile }} </h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>156</strong> posts</div>
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

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://i.pinimg.com/originals/0c/e0/62/0ce06216c4f52072b8560692f9aab4c3.png" alt="" class=" w-100">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/474x/85/5b/2b/855b2b606c64c961da2922a240a43236.jpg" alt="" class=" w-100">
        </div>
        <div class="col-4">
            <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="" class=" w-100">
        </div>
    </div>
</div>
@endsection