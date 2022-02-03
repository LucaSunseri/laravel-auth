@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Lista Post</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th colspan="4" scope="col">Content</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 50, '...') }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.posts.show', $post) }}">INFO</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post) }}">EDIT</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="#">DELETE</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $posts->links() }}

    </div>
@endsection
