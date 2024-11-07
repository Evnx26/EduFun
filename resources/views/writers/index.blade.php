@extends('layout.master')

@section('title')
<title>Writers</title>
@endsection

<style>
    .writer-card {
        text-align: center;
        padding: 20px;
        transition: transform 0.3s;
    }
    .writer-card:hover {
        transform: translateY(-5px);
    }
    .writer-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 15px;
    }
    
</style>

@section('konten')
<div class="container">
    <h2 class="mb-5">Our Writers:</h2>
    
    <div class="row">
        @forelse ($writers as $writer)
        <div class="col-md-4 mb-4">
            <div class="writer-card">
                <img src="{{ $writer->avatar }}" alt="writer" class="writer-image">
                <a href="{{ route('writer.show', $writer->slug) }}" class="text-decoration-none text-dark">
                    <p class="mb-0 fw-bold">{{ $writer->name }}</p>
                    {{-- <p>Spesialis {{ $writer->posts->first()->category->name }}</p> --}}
                </a>
            </div>
        </div>
        @empty
            <p class="text-center">No writers yet</p>
        @endforelse
    </div>
</div>
@endsection