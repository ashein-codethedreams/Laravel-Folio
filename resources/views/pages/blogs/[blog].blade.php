<?php

use function Laravel\Folio\{middleware};
use App\Http\Middleware\AuthMiddleware;

middleware(AuthMiddleware::class);

?>

@php
    use Illuminate\Support\Facades\Gate;

    auth()->loginUsingId(1);
    if (Gate::denies('view', $blog)) {
        abort(403);
    }
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
    <h1>{{ $blog->title }}</h1>
    <h3>author - {{ $blog->author->name }}</h3>
</body>

</html>
