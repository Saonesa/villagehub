@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->excerpt }}</p>
        <a href="{{ route('blog.show', $post->slug) }}">Read More</a>
    </div>
@endforeach
