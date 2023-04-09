<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>


<body>
<main>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <p>{!!$post->body !!}</p>
        <p>Posted at <?= date('M Y', $post->published_at); ?></p>
        <a class="home-btn" href="/">Home</a>
    </article>

</main>
</body>
</html>
