@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

        <a href="{{ route('admin.posts.index') }}">Back Lista Post</a>

    </div>
@endsection
