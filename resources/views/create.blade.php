<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    @trixassets
</head>
<body>
    <h2>Create Post</h2>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            {{-- <textarea name="body" id="body" cols="30" rows="10"></textarea> --}}
            @trix(\App\Post::class, 'body')
        </div>
        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>
</body>
</html>
