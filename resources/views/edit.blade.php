<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    @trixassets
</head>
<body>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        </div>
        <div>
            {{-- <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea> --}}
            @trix($post, 'body')
            {{-- @trix($post, 'body', [ 'hideTools' => ['text-tools'] ]) --}}
        </div>
        <div>
            <button type="submit">Update Post</button>
        </div>
    </form>
</body>
</html>
