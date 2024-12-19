<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<div>
    <strong>Category:</strong> {{ $post->category->name }}
</div>
<div>
    <strong>Author:</strong> {{ $post->author->name }}
</div>
