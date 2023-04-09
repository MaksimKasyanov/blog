<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->iteration % 3 == 0 ? 'third' : ($loop->even ? 'even' : 'odd') }}">
            <h1>{{ $loop->iteration }}. <a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <p>{{$post->excerpt}}</p>
        </article>
    @endforeach
</x-layout>

