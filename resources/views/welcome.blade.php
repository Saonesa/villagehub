<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/shadcnui@latest/dist/shadcnui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- Navbar -->
    <nav class="sticky top-0 p-4 text-black bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="/logo.png" alt="Logo" class="h-10 mr-3">
                <a href="#" class="text-2xl font-bold">Desa Sangiang</a>
            </div>
            <ul class="flex space-x-6">
                <li><a href="#about" class="hover:underline">Tentang</a></li>
                <li><a href="#features" class="hover:underline">Fitur</a></li>
                <li><a href="#contact" class="hover:underline">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-left py-20 bg-cover bg-center" style="background-image: url('/hero-bg.jpg');" id="hero">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-extrabold text-black">Selamat datang di Desa Sangiang</h1>
            <p class="mt-4 text-xl text-white">Meningkatkan kesejahteraan dengan teknologi dan kebersamaan</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about py-20 bg-gray-100" id="about">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold">Tentang Desa Kami</h2>
            <p class="mt-4 text-lg">Desa Sangiang adalah desa yang berkomitmen untuk meningkatkan kesejahteraan masyarakat melalui teknologi dan kebersamaan. Kami percaya bahwa dengan bekerja sama, kita dapat mencapai tujuan bersama dan menciptakan masa depan yang lebih baik.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20" id="features">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold">Fitur Desa Kami</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Teknologi Pertanian</h3>
                    <p class="text-gray-700">Kami menggunakan teknologi terbaru untuk meningkatkan hasil pertanian dan kesejahteraan petani.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Pendidikan</h3>
                    <p class="text-gray-700">Kami menyediakan akses pendidikan berkualitas untuk semua warga desa.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Kesehatan</h3>
                    <p class="text-gray-700">Kami memiliki fasilitas kesehatan yang lengkap dan tenaga medis yang profesional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-100" id="contact">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold">Kontak Kami</h2>
            <p class="mt-4 text-lg">Jika Anda memiliki pertanyaan atau ingin bergabung dengan kami, jangan ragu untuk menghubungi kami.</p>
            <form class="mt-8 max-w-lg mx-auto">
                <div class="mb-4">
                    <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <input type="email" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Email">
                </div>
                <div class="mb-4">
                    <textarea class="w-full p-3 border border-gray-300 rounded-lg" rows="5" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="bg-green-600 text-white py-3 px-6 rounded-lg">Kirim</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Desa Sangiang. All rights reserved.</p>
            <p>Follow us on 
                <a href="#" class="underline">Facebook</a>, 
                <a href="#" class="underline">Twitter</a>, and 
                <a href="#" class="underline">Instagram</a>.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/shadcnui@latest/dist/shadcnui.min.js"></script>
</body>
</html>