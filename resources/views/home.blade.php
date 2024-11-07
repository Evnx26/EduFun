@extends('layout.master')

@section('title')
<title>Home Page</title>
@endsection

@section('konten')
<div class="row">
    <div class="col-12">
        <img src="{{ asset('img/homepage_education.jpg') }}" alt="PHOTO" width="100%" height="500px">
    </div>

    <div class="container-fluid">
        <div class="row py-4 g-5 m-0">
            @forelse ($posts as $post)
                <div class="col-lg-5 p-0">
                    <img src="{{ $post->image }}" alt="content" class="img-fluid w-100 rounded-5"
                        style="max-height: 200px;">
                </div>
                <div class="col-lg-7">
                    <h3>{{ $post->title }}</h1>
                        <p class="text-muted">
                            {{ $post->created_at->format('d M Y') . ' | ' . $post->writer->name . '' }}</p>
                        <p class="text-truncate">
                            {{ $post->body }}
                        </p>
                        <a href="{{ route('posts.index', $post->slug) }}" class="btn btn-dark px-5 rounded-5 float-end">Read more...</a>
                </div>
            @empty
                <p class="text-center">No posts yet</p>
            @endforelse
        </div>
    </div>

</div>
@endsection