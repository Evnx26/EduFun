@extends('layout.master')

@section('title')
<title>Popular</title>
@endsection

@section('konten')
<div class="row py-2 g-5 m-0">
    @forelse ($posts as $post)
        <div class="col-lg-5 p-0">
            <img src="{{ $post->image }}" alt="content" class="img-fluid w-100 rounded-5" style="max-height: 200px;">
        </div>
        <div class="col-lg-7">
            <h3>{{ $post->title }}</h1>
            <p class="text-muted">
                {{ $post->created_at->format('d M Y') . ' | ' . $post->writer->name . '' }}
            </p>
            <p class="text-truncate">
                {{ $post->body }}
            </p>
            <a href="{{ route('posts.index', $post->slug) }}" class="btn btn-dark px-5 rounded-5 float-end">Read more...</a>
        </div>
    @empty
        <p class="text-center">No posts yet</p>
    @endforelse

</div>
@endsection