<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h2>Posts</h2>

    <div>
        <a href="{{ route('posts.create') }}">Create Post</a>
    </div>

    <ul>
    @foreach ($posts as $post)
        <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
    @endforeach
    </ul>
</body>
</html>
