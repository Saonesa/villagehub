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
                        sans: ['Roboto', 'sans-serif'],
                    },
                },
            },
        }

        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("bg-transparent", "shadow-none");
            } else {
                navbar.classList.remove("bg-transparent", "shadow-none");
            }
        };

        function toggleDetails() {
            const details = document.getElementById("details");
            if (details.classList.contains("hidden")) {
                details.classList.remove("hidden");
                details.classList.add("fade-in");
            } else {
                details.classList.remove("fade-in");
                details.classList.add("fade-out");
                setTimeout(function() {
                    details.classList.add("hidden");
                    details.classList.remove("fade-out");
                }, 1000);
            }
        }

        function toggleMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        }
    </script>

    <style>
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .fade-in {
            animation: fadeIn 2s ease-out forwards;
        }

        .fade-out {
            animation: fadeOut 1s ease-out forwards;
        }

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
            <div class="hidden md:flex space-x-6">
                <a href="#beranda" class="text-white hover:text-gray-300 transition-colors duration-300">Beranda</a>
                <a href="#profil" class="text-white hover:text-gray-300 transition-colors duration-300">Profil Desa</a>
                <a href="#infografis" class="text-white hover:text-gray-300 transition-colors duration-300">Infografis</a>
                <a href="#berita" class="text-white hover:text-gray-300 transition-colors duration-300">Berita</a>
                <a href="#hubungi" class="text-white hover:text-gray-300 transition-colors duration-300">Hubungi Kami</a>
            </div>
            <div class="md:hidden">
                <button class="text-white" id="hamburger-icon" onclick="toggleMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden mt-4">
            <a href="#beranda" class="block text-white py-2 hover:bg-green-700 transition-colors duration-300">Beranda</a>
            <a href="#profil" class="block text-white py-2 hover:bg-green-700 transition-colors duration-300">Profil Desa</a>
            <a href="#infografis" class="block text-white py-2 hover:bg-green-700 transition-colors duration-300">Infografis</a>
            <a href="#berita" class="block text-white py-2 hover:bg-green-700 transition-colors duration-300">Berita</a>
            <a href="#hubungi" class="block text-white py-2 hover:bg-green-700 transition-colors duration-300">Hubungi Kami</a>
        </div>
    </nav>

    <!-- Header -->
    <header id="beranda" class="relative bg-cover bg-center h-screen" style="background-image: url('https://kayen-karangan.trenggalekkab.go.id/assets/files/artikel/sedang_1519093467tanah-desa.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center text-white flex flex-col justify-center items-center h-full">
            <h1 class="text-4xl md:text-6xl font-bold fade-in">Selamat Datang di Desa Sangiang</h1>
            <p class="mt-4 text-lg md:text-xl fade-in">Menjaga harmoni dan keindahan masyarakat desa kami</p>
            <p id="details" class="mt-4 text-lg text-white hidden">
                Desa Sangiang adalah desa yang memadukan tradisi dan modernitas, dengan pemandangan alam yang menawan dan masyarakat yang ramah. Kami berkomitmen untuk menjaga keindahan dan harmoni desa ini.
                <br><br>
                Kami juga memperkenalkan berbagai program unggulan yang mendukung kesejahteraan warga, serta memfasilitasi kemajuan desa melalui teknologi dan inovasi yang ramah lingkungan.
            </p>
            <button class="mt-8 px-6 py-3 bg-green-600 hover:bg-green-500 rounded-full text-white font-semibold transition-transform duration-300 transform hover:scale-105" onclick="toggleDetails()">
                Lihat Selengkapnya
            </button>
        </div>
    </header>

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
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Berita Desa Sangiang</h2>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                @foreach ($posts as $post)
                    <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                        <img class="w-full h-48 object-cover rounded-lg" src="your-image-url.jpg" alt="Post image">
                        <h3 class="text-xl font-semibold text-green-600 mt-4">{{ $post->title }}</h3>
                        <p class="mt-2 text-gray-600">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="mt-4 inline-block text-blue-500 hover:underline">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Hubungi Kami -->
    <section id="hubungi" class="py-12 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Hubungi Kami</h2>
            <form class="max-w-lg mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                    <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 py-4 text-white text-center">
        <p>&copy; 2024 Desa Sangiang. All rights reserved.</p>
    </footer>

</body>
</html>
