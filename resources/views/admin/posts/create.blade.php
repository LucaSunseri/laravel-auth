@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>Crea un nuovo Post</h1>

        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
@endsection
