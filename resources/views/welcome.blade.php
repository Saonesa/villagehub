<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sangiang</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipuww7nvz1WVwMtaAgujdrOc2ymC05cYx4t3xvDXrejaT0REMadikemBZGnkG3RSXDwnTFTLmtGuZpCZS8K8x7KjCfiges0Tdav5AhxgxOj-fwClbjqGvDjfHfcuO8-tDhtQ9K0LMS5jnzouBulsAJgc-JXx2MSMHjnLDf84ivQ170lKNP13SbdHxi/s512/PicsArt_11-08-01.28.06.png">

    <!-- Link Google Fonts untuk Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'], // Atur font default ke Roboto
                    },
                },
            },
        }

        // JavaScript untuk mengubah navbar menjadi transparan saat di-scroll
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("bg-transparent", "shadow-none");
            } else {
                navbar.classList.remove("bg-transparent", "shadow-none");
            }
        };

        // Fungsi untuk menampilkan/menyembunyikan keterangan Desa Sangiang dengan efek fade
        function toggleDetails() {
            const details = document.getElementById("details");
            if (details.classList.contains("hidden")) {
                details.classList.remove("hidden");
                details.classList.add("fade-in");
            } else {
                details.classList.remove("fade-in");
                details.classList.add("fade-out");
                // Setelah animasi selesai, sembunyikan teks
                setTimeout(function() {
                    details.classList.add("hidden");
                    details.classList.remove("fade-out");
                }, 1000); // Waktu animasi fade-out (sama dengan durasi animasi fade-in)
            }
        }
    </script>

    <style>
        /* Animasi fade-in untuk teks */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px); /* Efek gerakan sedikit ke bawah */
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animasi fade-out untuk teks */
        @keyframes fadeOut {
            0% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(20px); /* Efek gerakan sedikit ke bawah */
            }
        }

        .fade-in {
            animation: fadeIn 2s ease-out forwards;
        }

        .fade-out {
            animation: fadeOut 1s ease-out forwards;
        }

        /* Untuk menyembunyikan konten yang belum ditampilkan */
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav id="navbar" class="navbar top-0 left-0 right-0 bg-green-600 transition-all duration-300 z-10 p-4 shadow-lg">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipuww7nvz1WVwMtaAgujdrOc2ymC05cYx4t3xvDXrejaT0REMadikemBZGnkG3RSXDwnTFTLmtGuZpCZS8K8x7KjCfiges0Tdav5AhxgxOj-fwClbjqGvDjfHfcuO8-tDhtQ9K0LMS5jnzouBulsAJgc-JXx2MSMHjnLDf84ivQ170lKNP13SbdHxi/s512/PicsArt_11-08-01.28.06.png" alt="Logo Desa Sangiang" class="h-12">
                <span class="ml-4 text-white text-2xl font-semibold">Desa Sangiang</span>
            </div>
            <div class="flex space-x-6 hidden md:flex">
                <a href="#beranda" class="text-white">Beranda</a>
                <a href="#profil" class="text-white">Profil Desa</a>
                <a href="#infografis" class="text-white">Infografis</a>
                <a href="#berita" class="text-white">Berita</a>
                <a href="#galeri" class="text-white">Galeri Desa</a>
            </div>
            <a href="#contact" class="flex items-center">
                <span class="text-white mr-2">Hubungi Kami</span>
                <button class="text-white md:hidden" id="hamburger-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </a>
        </div>
    </nav>

    <!-- Header -->
    <header id="beranda" class="relative bg-cover bg-center h-screen" style="background-image: url('https://kayen-karangan.trenggalekkab.go.id/assets/files/artikel/sedang_1519093467tanah-desa.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center text-white flex flex-col justify-center items-center h-full">
            <h1 class="text-4xl md:text-6xl font-bold fade-in">Selamat Datang di Desa Sangiang</h1>
            <p class="mt-4 text-lg md:text-xl fade-in">Menjaga harmoni dan keindahan masyarakat desa kami</p>
            <!-- Teks Keterangan Desa -->
            <p id="details" class="mt-4 text-lg text-white hidden">
                Desa Sangiang adalah desa yang memadukan tradisi dan modernitas, dengan pemandangan alam yang menawan dan masyarakat yang ramah. Kami berkomitmen untuk menjaga keindahan dan harmoni desa ini.
                <br><br>
                Kami juga memperkenalkan berbagai program unggulan yang mendukung kesejahteraan warga, serta memfasilitasi kemajuan desa melalui teknologi dan inovasi yang ramah lingkungan.
            </p>
            <button class="mt-8 px-6 py-3 bg-green-600 hover:bg-green-500 rounded-full text-white font-semibold" onclick="toggleDetails()">
                Lihat Selengkapnya
            </button>
        </div>
    </header>

    <!-- Sisa konten lainnya tetap seperti sebelumnya... -->


    <!-- Profil Desa -->
    <section id="profil" class="py-12 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Profil Desa Sangiang</h2>
            <div class="flex justify-center mt-6">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipuww7nvz1WVwMtaAgujdrOc2ymC05cYx4t3xvDXrejaT0REMadikemBZGnkG3RSXDwnTFTLmtGuZpCZS8K8x7KjCfiges0Tdav5AhxgxOj-fwClbjqGvDjfHfcuO8-tDhtQ9K0LMS5jnzouBulsAJgc-JXx2MSMHjnLDf84ivQ170lKNP13SbdHxi/s512/PicsArt_11-08-01.28.06.png" alt="Logo Desa Sangiang" class="w-24 h-24 rounded-full">
            </div>
            <p class="mt-4 text-gray-600">
                Desa Sangiang adalah desa yang memadukan tradisi dan modernitas, dengan pemandangan alam yang menawan dan masyarakat yang ramah. Kami berkomitmen untuk menjaga keindahan dan harmoni desa ini.
            </p>
        </div>

        <!-- Visi dan Misi -->
        <div class="container mx-auto mt-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-semibold text-green-600">Visi Desa Sangiang</h3>
                    <p class="mt-2 text-gray-600">
                        Menjadi desa yang berkembang dengan mengedepankan kesejahteraan sosial dan ekonomi masyarakat, dengan menjaga kelestarian alam dan budaya lokal.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-green-600">Misi Desa Sangiang</h3>
                    <ul class="mt-2 text-gray-600 list-disc pl-6">
                        <li>Meningkatkan kualitas pendidikan dan keterampilan masyarakat.</li>
                        <li>Memperkuat ekonomi lokal melalui pemberdayaan usaha kecil dan menengah.</li>
                        <li>Melestarikan lingkungan dan budaya desa untuk generasi mendatang.</li>
                        <li>Meningkatkan aksesibilitas infrastruktur dan fasilitas umum di desa.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- Infografis -->
<section id="infografis" class="py-12 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Infografis Desa Sangiang</h2>
        <div class="flex flex-col md:flex-row justify-center items-center gap-8">
            <!-- Card: Luas Wilayah -->
            <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                <img src="https://th.bing.com/th/id/R.d2514b663fa2cde2494d0aa267c00c38?rik=xP%2bUpTPhDHAreg&riu=http%3a%2f%2francaekek.com%2fwp-content%2fuploads%2fpeta-rancaekek.png&ehk=rA87atjcH4d3tmC6X1meoyltim2Bgd%2fTzhWRR6geJkk%3d&risl=&pid=ImgRaw&r=0" 
                     alt="Luas Wilayah" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-semibold text-green-600 mt-4">Luas Wilayah</h3>
                <p class="mt-2 text-gray-600">856 Ha</p>
            </div>
            <!-- Tabel: Batas Desa -->
            <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-green-600 mb-4">Batas Desa</h3>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Arah</th>
                            <th class="px-4 py-2 border">Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border">Utara</td>
                            <td class="px-4 py-2 border">Desa A</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Timur</td>
                            <td class="px-4 py-2 border">Desa B</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Selatan</td>
                            <td class="px-4 py-2 border">Desa C</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border">Barat</td>
                            <td class="px-4 py-2 border">Desa D</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Berita -->
<section id="berita" class="py-12 bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Berita Terbaru</h1>

        <!-- Tampilkan semua postingan -->
        @foreach($posts as $post)
            <div class="mb-6 p-6 bg-white shadow-lg rounded-lg">
                <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="text-green-600 hover:text-green-500 mt-2 inline-block">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>
</section>

<!-- Galeri Desa -->
<section id="galeri" class="py-12 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Galeri Desa</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card Galeri 1 -->
            <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                <img src="https://www.gotravelly.com/blog/wp-content/uploads/2020/09/staubbach-falls.jpg" alt="Pemandangan Alam" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-semibold text-green-600 mt-4">Pemandangan Alam</h3>
                <p class="mt-2 text-gray-600">Keindahan alam desa yang memukau.</p>
            </div>
            <!-- Card Galeri 2 -->
            <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                <img src="https://cdn.idntimes.com/content-images/community/2019/03/stock-photo-20611331-431fe27955c1d0a7a6aa80d87fee15fa.jpg" alt="Pemandangan Desa 1" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-semibold text-green-600 mt-4">Pemandangan Desa</h3>
                <p class="mt-2 text-gray-600">Pemandangan desa dari ketinggian.</p>
            </div>
            <!-- Card Galeri 3 -->
            <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="https://th.bing.com/th/id/OIP.KPphHrBwkqfJG5Bnb7suNQHaE7?rs=1&pid=ImgDetMain" 
               alt="Pemandangan Desa 2" class="w-full h-48 object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            <h3 class="text-xl font-semibold text-green-600 mt-4 hover:text-green-800 transition-colors duration-300">Pemandangan Desa</h3>
           <p class="mt-2 text-gray-600 hover:text-gray-800 transition-colors duration-300">Pemandangan dari area perkebunan desa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="contact" class="bg-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Hubungi Kami</h2>
        <p class="text-lg text-gray-600 mb-8">Kami siap membantu Anda! Jika Anda memiliki pertanyaan, saran, atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui informasi kontak berikut. Kami selalu siap mendengarkan dan memberikan solusi terbaik untuk kebutuhan Anda.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="flex flex-col items-center">
                <i class="fas fa-phone-alt text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-800">Telepon</h3>
                <p class="text-lg text-gray-600">+62 123 456 789</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-envelope text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-800">Email</h3>
                <p class="text-lg text-gray-600">contact@desasangiang.com</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-map-marker-alt text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-800">Alamat</h3>
                <p class="text-lg text-gray-600">Jl. Raya Sangiang No. 10, Jakarta</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-lg text-gray-600">Jam Operasional: Senin - Jumat, 09:00 - 17:00</p>
            <p class="text-lg text-gray-600 mt-4">Kami akan berusaha merespon setiap pesan atau pertanyaan yang Anda kirimkan dalam waktu 24 jam. Jangan ragu untuk menghubungi kami kapan saja, kami selalu terbuka untuk berbicara dengan Anda dan membantu menyelesaikan masalah Anda dengan cepat dan efektif.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-green-600 text-white py-8 mt-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kolom 1: Informasi Desa -->
            <div>
                <h3 class="text-xl font-bold mb-4">Desa Sangiang</h3>
                <p class="text-lg">Desa yang memadukan tradisi dan modernitas, dengan pemandangan alam yang menawan dan masyarakat yang ramah. Kami berkomitmen untuk menjaga keindahan dan harmoni desa ini.</p>
            </div>

            <!-- Kolom 2: Kontak -->
            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <ul>
                    <li class="mb-2">
                        <span class="font-semibold">Telepon:</span> +62 123 456 789
                    </li>
                    <li class="mb-2">
                        <span class="font-semibold">Email:</span> contact@desasangiang.com
                    </li>
                    <li class="mb-2">
                        <span class="font-semibold">Alamat:</span> Jl. Raya Sangiang No. 1, Desa Sangiang, Kabupaten X
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Media Sosial -->
            <div>
                <h3 class="text-xl font-bold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/realnakbart" class="text-2xl hover:text-gray-300"><i class="fab fa-facebook-f">@infodesasangiang</i></a>
                </div>
            </div>
        </div>

        <!-- Logo di tengah footer -->
        <div class="flex justify-center items-center mt-8">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipuww7nvz1WVwMtaAgujdrOc2ymC05cYx4t3xvDXrejaT0REMadikemBZGnkG3RSXDwnTFTLmtGuZpCZS8K8x7KjCfiges0Tdav5AhxgxOj-fwClbjqGvDjfHfcuO8-tDhtQ9K0LMS5jnzouBulsAJgc-JXx2MSMHjnLDf84ivQ170lKNP13SbdHxi/s512/PicsArt_11-08-01.28.06.png" alt="Logo Desa Sangiang" class="h-24">
        </div>

        <!-- Copyright -->
        <div class="text-center mt-8">
            <p class="text-lg">&copy; 2024 Desa Sangiang. All Rights Reserved.</p>
        </div>
    </div>
</footer>


</body>
</html>