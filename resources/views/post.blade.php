@extends ('layout')


@section('content')

<div>
    <h1>Blog posts</h1>
    <p>{{ $post->body }}</p>
</div>

@endsection
