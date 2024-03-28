@php
    use App\Models\Blog;

    $blogs = Blog::all();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>My Blogs</h1>
    <ul>
        @foreach ($blogs as $blog)
            <li>{{ $blog->title }} author - {{ $blog->author->name }}</li>
        @endforeach

    </ul>
</body>

</html>
