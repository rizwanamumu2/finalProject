@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between">
            	<h1>{{ $user->username }}</h1>
            	<a href="#">Add new post</a>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profiles->title}}</div>
            <div>{{$user->profiles->description}}</div>
            <div><a href="#">{{$user->profiles->url}}</a></div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-5">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
