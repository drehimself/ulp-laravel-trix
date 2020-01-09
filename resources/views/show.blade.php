<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h2>{{ $post->title }}</h2>
    <div>
        {{-- {{ $post->body }} --}}
        {!! $post->trixRichText()->where('field', 'body')->first()->content !!}
    </div>

    <div>
        <a href="{{ route('posts.edit', $post) }}">Edit post</a>
    </div>
</body>
</html>
