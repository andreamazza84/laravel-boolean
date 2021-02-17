@extends('layout')
@section('content')
    @foreach ($posts as $post)
        <div class="card">
            <h3 class="title">{{ $post->title }}</h3>
            <p class="content">{{ $post->body }}</p>
        </div>
    @endforeach    
@endsection