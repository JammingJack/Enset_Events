@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{  $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img class="w-100 rounded-circle pr-3 " src="/storage/{{ $post->user->profile->image }}" style="max-width:50px;">
                    </div>
                    <div class="">
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>

                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
