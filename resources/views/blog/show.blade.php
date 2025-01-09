<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - VillageHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

<div class="max-w-4xl mx-auto p-6 bg-white shadow-xl rounded-lg my-12">
    <!-- Judul Postingan -->
    <h1 class="text-5xl font-extrabold text-gray-900 leading-tight mb-6">{{ $post->title }}</h1>

    <!-- Informasi Kategori & Penulis -->
    <div class="flex items-center text-sm text-gray-600 mb-6">
        <span class="mr-6">Category: 
            <span class="font-semibold text-gray-900">{{ $post->category->name }}</span>
        </span>
        <span>Written by 
            <span class="font-semibold text-gray-900">{{ $post->author->name }}</span>
        </span>
    </div>

    <!-- Tanggal Publish -->
    <div class="text-sm text-gray-500 mb-8">
        <span class="block">Published on 
            <span class="font-semibold">{{ $post->created_at->format('M d, Y') }}</span>
        </span>
    </div>

    <!-- Divider (similar to Medium style) -->
    <hr class="border-t-2 border-gray-200 mb-8">

    <!-- Isi Konten -->
    <div class="prose max-w-none">
        {!! nl2br(e($post->content)) !!}
    </div>

    <!-- Divider -->
    <hr class="border-t-2 border-gray-200 my-8">

    <!-- Footer -->
    <div class="flex items-center justify-between text-gray-600 text-sm">
        <a href="{{ url()->previous() }}" class="text-blue-500 hover:underline">Back</a>
    </div>
</div>

</body>
</html>
