@extends('layouts.app')
@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $post->images }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center my-2">
            <a class="btn btn-secondary mr-2" href="{{ route('admin.posts.index') }}" type="button"
                class="btn btn-success">
                Indietro
            </a>
        </div>
    </div>
@endsection
