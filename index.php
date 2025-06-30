<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN Desa Cinta Maju 2025 | Universitas Negeri Medan</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <link rel="icon" href="logo/logo.png" type="image/png">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        maroon: '#800020',
                        beige: '#F5F5DC',
                        'maroon-dark': '#600018',
                        'beige-dark': '#E6E6C7'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .gradient-text {
            background: linear-gradient(45deg, #800020, #F5F5DC);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #800020, #F5F5DC);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        .modal {
            backdrop-filter: blur(10px);
        }

        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .countdown-item {
            background: rgba(128, 0, 32, 0.1);
            backdrop-filter: blur(10px);
        }

        .story-mode {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            display: none;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, #800020, #F5F5DC);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .preloader-logo {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background: #25d366;
            color: white;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .back-to-top {
            position: fixed;
            bottom: 120px;
            right: 40px;
            width: 50px;
            height: 50px;
            background: #800020;
            color: white;
            border-radius: 50%;
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 99;
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            background: #600018;
            transform: translateY(-5px);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<div id="preloader" class="preloader">
   <div class="preloader-logo text-white flex flex-col items-center">
       <img src="logo/logo.png" alt="Logo KKN Desa Cinta Maju" class="w-24 h-24 object-contain">
       <div class="text-2xl mt-4 font-bold text-center">KKN Desa Cinta Maju</div>
       <div class="text-lg text-center">2025</div>
   </div>
</div>

    <div id="particles-js"></div>

    <div id="scroll-progress" class="scroll-progress"></div>

    <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-lg transition-all duration-300">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <img src="logo/logo.png" alt="Logo KKN Cinta Maju" class="w-8 h-8 object-contain">
                    <span class="text-xl font-bold gradient-text">KKN Cinta Maju</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="hover:text-maroon transition-colors">Beranda</a>
                    <a href="#about" class="hover:text-maroon transition-colors">Tentang</a>
                    <a href="#team" class="hover:text-maroon transition-colors">Tim</a>
                    <a href="#gallery" class="hover:text-maroon transition-colors">Galeri</a>
                    <a href="#contact" class="hover:text-maroon transition-colors">Kontak</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                        <i class="fas fa-sun dark:hidden"></i>
                        <i class="fas fa-moon hidden dark:block"></i>
                    </button>
                    <button id="mobile-menu-btn" class="md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-white dark:bg-gray-900 z-40 transform -translate-x-full transition-transform duration-300">
        <div class="flex flex-col items-center justify-center h-full space-y-8 text-2xl">
            <a href="#home" class="mobile-menu-link">Beranda</a>
            <a href="#about" class="mobile-menu-link">Tentang</a>
            <a href="#team" class="mobile-menu-link">Tim</a>
            <a href="#gallery" class="mobile-menu-link">Galeri</a>
            <a href="#contact" class="mobile-menu-link">Kontak</a>
        </div>
    </div>

    <section id="home" class="min-h-screen flex items-center justify-center relative parallax-bg" style="background-image: url('images/1.png');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center text-white px-4">
            <div class="floating-animation mb-8">
                 <img src="logo/logo.png" alt="Logo KKN Desa Cinta Maju" class="w-48 h-48 object-contain mx-auto">
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-4" data-aos="fade-up">
                KKN Desa Cinta Maju
            </h1>
            <p class="text-xl md:text-2xl mb-6" data-aos="fade-up" data-aos-delay="200">
                Universitas Negeri Medan | 7 Juli - 7 Agustus 2025
            </p>
            <p class="text-lg mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                Kecamatan Sitio Tio, Kabupaten Samosir - Membangun Desa dengan Semangat Muda
            </p>

            <div id="countdown" class="grid grid-cols-4 gap-4 max-w-md mx-auto mb-8" data-aos="fade-up" data-aos-delay="600">
                <div class="countdown-item p-4 rounded-lg text-center">
                    <div id="days" class="text-3xl font-bold">00</div>
                    <div class="text-sm">Hari</div>
                </div>
                <div class="countdown-item p-4 rounded-lg text-center">
                    <div id="hours" class="text-3xl font-bold">00</div>
                    <div class="text-sm">Jam</div>
                </div>
                <div class="countdown-item p-4 rounded-lg text-center">
                    <div id="minutes" class="text-3xl font-bold">00</div>
                    <div class="text-sm">Menit</div>
                </div>
                <div class="countdown-item p-4 rounded-lg text-center">
                    <div id="seconds" class="text-3xl font-bold">00</div>
                    <div class="text-sm">Detik</div>
                </div>
            </div>

            <div class="space-x-4" data-aos="fade-up" data-aos-delay="800">
                <button class="bg-maroon hover:bg-maroon-dark px-8 py-3 rounded-full text-white font-semibold transition-all duration-300 transform hover:scale-105">
                    Jelajahi KKN
                </button>
                <button id="story-mode-btn" class="border-2 border-white hover:bg-white hover:text-maroon px-8 py-3 rounded-full font-semibold transition-all duration-300">
                    Mode Cerita
                </button>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-beige dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4 gradient-text">Tentang KKN</h2>
                <p class="text-lg max-w-3xl mx-auto">
                    Kuliah Kerja Nyata (KKN) adalah salah satu bentuk kegiatan intrakurikuler wajib bagi mahasiswa di perguruan tinggi Indonesia.
                    Kami hadir di Desa Cinta Maju untuk memberikan kontribusi nyata dalam pembangunan masyarakat.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="glass-effect p-8 rounded-2xl">
                        <h3 class="text-2xl font-bold mb-6">Filosofi Logo</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-mountain text-maroon text-xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Gunung & Matahari</h4>
                                    <p class="text-sm">Melambangkan semangat dan harapan baru dalam pembangunan desa.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-tree text-green-600 text-xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Pohon & Tanaman</h4>
                                    <p class="text-sm">Simbol pelestarian alam dan kontribusi dalam sektor pertanian serta lingkungan.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-water text-blue-600 text-xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Air atau Sungai</h4>
                                    <p class="text-sm">Menunjukkan kehidupan, kesuburan, dan keterhubungan masyarakat desa.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-palette text-maroon text-xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Warna Maroon & Beige</h4>
                                    <p class="text-sm">Mewakili semangat muda yang elegan, modern, serta berakar pada nilai-nilai lokal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="text-center">
                        <div class="w-64 h-64 mx-auto bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center text-white text-8xl shadow-2xl mb-8">
                            <img src="logo/logo.png" alt="Logo KKN Desa Cinta Maju" class="w-full h-full object-contain p-4">
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Logo KKN Desa Cinta Maju</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Sebuah simbol yang menggambarkan harmoni antara alam, pembangunan, dan semangat muda mahasiswa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4 gradient-text">Tim KKN</h2>
            <p class="text-lg">21 Mahasiswa Terpilih Universitas Negeri Medan</p>

            <div class="mt-8 max-w-md mx-auto">
                <div class="relative">
                    <input type="text" id="search-input" placeholder="Cari mahasiswa..." class="w-full px-4 py-2 pl-10 rounded-full border dark:bg-gray-700 dark:border-gray-600">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="mt-4 flex flex-wrap justify-center gap-2">
                    <button class="filter-btn active px-4 py-2 rounded-full text-sm bg-maroon text-white" data-filter="all">Semua</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="bph">BPH</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="pdd">PDD</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="acara">Acara</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="humas">Humas</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="konsumsi">Konsumsi</button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm bg-gray-200 dark:bg-gray-700" data-filter="ptt">PTT</button>
                </div>
            </div>
        </div>
        <div id="team-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="bph" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/moses.jpg" alt="Foto Moses Yulianus Kawer" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Moses Yulianus Kawer</h3>
                <p class="text-maroon font-semibold mb-2">Ketua</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi BPH</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="moses">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="bph" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/juni.jpg" alt="Foto Juni Didik Harefa" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Juni Didik Harefa</h3>
                <p class="text-maroon font-semibold mb-2">Wakil Ketua</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi BPH</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="juni">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="bph" data-aos="fade-up" data-aos-delay="200">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/helga.jpg" alt="Foto Helga Chrisanta" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Helga Chrisanta</h3>
                <p class="text-maroon font-semibold mb-2">Sekretaris 1</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi BPH</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="helga">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="bph" data-aos="fade-up" data-aos-delay="300">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/cindi.jpg" alt="Foto Cindi Oktavia Mendrova" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Cindi Oktavia Mendrova</h3>
                <p class="text-maroon font-semibold mb-2">Sekretaris 2</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi BPH</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="cindi">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="bph" data-aos="fade-up" data-aos-delay="400">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/duana.jpg" alt="Foto Duana Angel Simanjutak" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Duana Angel Simanjutak</h3>
                <p class="text-maroon font-semibold mb-2">Bendahara</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi BPH</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="duana">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="pdd" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/roulina.jpg" alt="Foto Roulina Sinaga" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Roulina Sinaga</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PDD</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="roulina">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="pdd" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/esa.jpg" alt="Foto Esa Indriyani Bangun" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Esa Indriyani Bangun</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PDD</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="esa">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="pdd" data-aos="fade-up" data-aos-delay="200">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/natasha.jpg" alt="Foto Natasha Shan" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Natasha Shan</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PDD</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="natasha">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="pdd" data-aos="fade-up" data-aos-delay="300">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/fidelia.jpg" alt="Foto Fidelia Beatrice" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Fidelia Beatrice</h3>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PDD</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="fidelia">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="acara" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/zaytuni.jpg" alt="Foto Zaytuni Nadya" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Zaytuni Nadya</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Acara</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="zaytuni">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="acara" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/junica.jpg" alt="Foto Junica Hizkia" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Junica Hizkia</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Acara</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="junica">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="acara" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/defa.jpg" alt="Foto Defa Zahara" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Defa Zahara</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Acara</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="defa">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="humas" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/andre.jpg" alt="Foto Andre Girsang" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Andre Girsang</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Humas</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="andre">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="humas" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/nila.jpg" alt="Foto Nila Rosaria Tamba" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Nila Rosaria Tamba</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Humas</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="nila">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="humas" data-aos="fade-up" data-aos-delay="200">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/nadin.jpg" alt="Foto Nadin Chairani" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Nadin Chairani</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Humas</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="nadin">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="konsumsi" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/ekalestari.jpg" alt="Foto Eka Lestari" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Eka Lestari</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Konsumsi</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="eka">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="konsumsi" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/sabaria.jpg" alt="Foto Sabaria Siagian" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Sabaria Siagian</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Konsumsi</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="sabaria">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="konsumsi" data-aos="fade-up" data-aos-delay="200">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/ruth.jpg" alt="Foto Ruth Novita" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Ruth Novita</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi Konsumsi</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="ruth">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="ptt" data-aos="fade-up">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/jepri.jpg" alt="Foto Jepri Alexander Padang" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Jepri Alexander Padang</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PTT</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="jepri">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="ptt" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/ceri.jpg" alt="Foto Ceri Marsel Tarigan" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Ceri Marsel Tarigan</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PTT</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="ceri">Lihat Detail</button>
            </div>

            <div class="team-member glass-effect p-6 rounded-2xl text-center transform hover:scale-105 transition-all duration-300" data-division="ptt" data-aos="fade-up" data-aos-delay="100">
                <div class="w-48 h-48 mx-auto mb-4 bg-gradient-to-br from-maroon to-beige rounded-full flex items-center justify-center overflow-hidden">
                    <img src="members/venny.jpg" alt="Foto Venny Desriani Sagala" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg mb-1">Venny Desriani Sagala</h3>
                <p class="text-maroon font-semibold mb-2">Anggota</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Divisi PTT</p>
                <button class="member-detail-btn text-maroon hover:underline" data-member="venny">Lihat Detail</button>
            </div>
        </div>
    </div>
</section>

<div id="member-detail-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-8 max-w-sm w-full relative transform scale-95 transition-transform duration-300">
        <button class="close-modal absolute top-4 right-4 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 text-2xl">
            <i class="fas fa-times"></i>
        </button>
        <div class="text-center">
            <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden border-4 border-maroon dark:border-beige">
                <img id="modal-member-photo" src="" alt="Foto Anggota" class="w-full h-full object-cover">
            </div>
            <h3 id="modal-member-name" class="font-bold text-2xl text-gray-900 dark:text-white mb-2"></h3>
            <p id="modal-member-position" class="text-maroon font-semibold text-lg mb-1"></p>
            <p id="modal-member-division" class="text-md text-gray-600 dark:text-gray-300 mb-4"></p>
            <p id="modal-member-nim" class="text-md text-gray-700 dark:text-gray-200 mb-1"></p>
            <p id="modal-member-major" class="text-md text-gray-700 dark:text-gray-200 mb-4"></p>
            <div id="modal-member-socials" class="flex justify-center space-x-4 mt-6">
                </div>
        </div>
    </div>
</div>

<div id="full-photo-overlay" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-[100] hidden">
    <button class="close-full-photo absolute top-4 right-4 text-white text-4xl z-10 hover:opacity-75 transition-opacity">
        <i class="fas fa-times"></i>
    </button>
    <img id="full-photo-view" src="" alt="Full size photo" class="max-w-[90vw] max-h-[90vh] object-contain">
</div>


    <section id="gallery" class="py-20 bg-beige dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4 gradient-text">Momen KKN Kami</h2>
                <p class="text-lg max-w-3xl mx-auto">
                    Lihatlah berbagai kegiatan dan interaksi kami dengan masyarakat Desa Cinta Maju.
                    Setiap foto menceritakan kisah perjalanan KKN kami.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery-grid">

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up">
        <img src="images/1.jpg" alt="Pemilihan Divisi KKN" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Pemilihan Divisi KKN</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="100">
        <img src="images/2.png" alt="Pembekalan KKN Kab. Samosir" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Pembekalan KKN Kab. Samosir</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="200">
        <video src="videos/1.mp4" title="Full Member KKN" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Full Member KKN</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="300">
        <video src="videos/2.mp4" title="Rapat KKN" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Rapat KKN</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="400">
        <video src="videos/3.mp4" title="Divisi KKN" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Divisi KKN</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="500">
        <video src="videos/4.mp4" title="First Meet" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">First Meet</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="600">
        <video src="videos/5.mp4" title="Coming Soon" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Coming Soon</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="700">
        <video src="videos/6.mp4" title="Trend Tiktok" controlslist="nodownload nofullscreen" preload="metadata" loop muted playsinline class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300"></video>
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Trend Tiktok</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="800">
        <img src="images/3.png" alt="Foto Bersama" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Foto Bersama</p>
        </div>
    </div>

    <div class="gallery-item relative overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="900">
        <img src="images/1.png" alt="Bimbingan Bersama" class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-300">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center px-4">Bimbingan Bersama</p>
        </div>
    </div>

</div>
        </div>
    </section>

    <section id="contact" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4 gradient-text">Hubungi Kami</h2>
                <p class="text-lg max-w-2xl mx-auto">
                    Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin berkolaborasi.
                    Kami siap membantu dan berbagi pengalaman KKN kami.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <div class="glass-effect p-8 rounded-2xl">
                        <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>
                        <div class="space-y-6 text-lg">
                            <div class="flex items-center space-x-4">
                                <i class="fas fa-map-marker-alt text-maroon text-2xl"></i>
                                <div>
                                    <h4 class="font-semibold">Alamat</h4>
                                    <p>Desa Cinta Maju, Kec. Sitio Tio, Kab. Samosir, Sumatera Utara</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <i class="fas fa-envelope text-maroon text-2xl"></i>
                                <div>
                                    <h4 class="font-semibold">Email</h4>
                                    <p><a href="mailto:kkndesacintamaju@gmail.com" class="hover:underline">kkndesacintamaju@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <i class="fas fa-phone text-maroon text-2xl"></i>
                                <div>
                                    <h4 class="font-semibold">Telepon</h4>
                                    <p><a href="tel:+6281234567890" class="hover:underline">+62 859-0026-7324</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="glass-effect p-8 rounded-2xl">
                        <h3 class="text-2xl font-bold mb-6">Kirim Pesan</h3>
                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="w-full p-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-maroon">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                                <input type="email" id="email" name="email" class="w-full p-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-maroon">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium mb-2">Pesan Anda</label>
                                <textarea id="message" name="message" rows="5" class="w-full p-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-maroon"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-maroon hover:bg-maroon-dark px-6 py-3 rounded-full text-white font-semibold transition-all duration-300 transform hover:scale-105">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-beige dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-4 gradient-text">Lokasi Kami</h2>
                <p class="text-lg">Temukan kami di peta!</p>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.33129845722!2d98.71887345!3d2.60742125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031f0f1c1f1d1e5%3A0x6b4c2b9a7f3e8b4e!2sDesa%20Cinta%20Maju%2C%20Kec.%20Sitio-tio%2C%20Kabupaten%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1719572458097!5m2!1sid!2sid"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-lg">
                </iframe>
            </div>
        </div>
    </section>

    <footer class="bg-maroon dark:bg-maroon-dark text-white py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center md:text-left" data-aos="fade-up">
                <h3 class="text-2xl font-bold mb-4">KKN Desa Cinta Maju</h3>
                <p class="text-sm">
                    Membangun Desa dengan Semangat Muda dan Kolaborasi yang Erat.
                    Dedikasi kami untuk Desa Cinta Maju, Kecamatan Sitio Tio, Kabupaten Samosir.
                </p>
                <div class="flex justify-center md:justify-start space-x-4 mt-6">
                    <a href="https://www.instagram.com/kkn.cintamaju.25?igsh=MmxrNTI0NG4wOWoy" class="text-white hover:text-beige transition-colors"><i class="fab fa-instagram text-xl"></i></a>
                    <a href="https://www.tiktok.com/@kkn.cintamaju.2025?_t=ZS-8xRtqcUdExT&_r=1&fbclid=PAQ0xDSwLN93tleHRuA2FlbQIxMQABpyPMJD-sL_Rq4h-PSNcvjiYOekdTrKUxBe48dU87Ak4SBpTfME1RHGmjjBjb_aem_xPJ1EHosps1YzMdL7HusaQ" class="text-white hover:text-beige transition-colors"><i class="fab fa-tiktok text-xl"></i></a>
                    <a href="https://wa.me/6285900267324" class="text-white hover:text-beige transition-colors"><i class="fab fa-whatsapp text-xl"></i></a>
<a href="mailto:kkndesacintamaju.25@gmail.com" class="text-white hover:text-beige transition-colors">
    <i class="fas fa-envelope text-xl"></i>
                </div>
            </div>
            <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="#home" class="hover:underline">Beranda</a></li>
                    <li><a href="#about" class="hover:underline">Tentang</a></li>
                    <li><a href="#team" class="hover:underline">Tim KKN</a></li>
                    <li><a href="#gallery" class="hover:underline">Galeri</a></li>
                    <li><a href="#contact" class="hover:underline">Kontak</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold mb-4">Informasi Tambahan</h3>
                <p class="text-sm">
                    Dukungan dari Universitas Negeri Medan menjadikan KKN ini berjalan lancar.
                    Kami berkomitmen untuk terus memberikan yang terbaik bagi masyarakat.
                </p>
                <p class="text-sm mt-4">&copy; 2025 KKN Desa Cinta Maju. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6285900267324" class="whatsapp-float flex items-center justify-center" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <button id="back-to-top" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div id="story-mode-overlay" class="story-mode flex items-center justify-center p-8">
    <div class="relative w-full max-w-3xl h-full max-h-[90vh] bg-white dark:bg-gray-900 rounded-lg shadow-2xl overflow-hidden flex flex-col">
        <button class="close-story-mode absolute top-4 right-4 text-maroon dark:text-beige text-3xl z-50 hover:opacity-75 transition-opacity">
            <i class="fas fa-times"></i>
        </button>

        <div class="relative flex-grow overflow-hidden flex items-center justify-center">
            <video id="story-mode-video" class="absolute inset-0 w-full h-full object-contain bg-black" controls autoplay style="display: none;">
                Your browser does not support the video tag.
            </video>
            <img id="story-mode-image" class="absolute inset-0 w-full h-full object-contain bg-black" style="display: none;">
        </div>

        <button id="story-prev-btn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full z-40 hover:bg-black/75 transition-colors">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="story-next-btn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-white p-3 rounded-full z-40 hover:bg-black/75 transition-colors">
            <i class="fas fa-chevron-right"></i>
        </button>

        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white">
            <h3 class="text-3xl font-bold mb-2" id="story-title">Perjalanan KKN Kami</h3>
            <p class="text-lg" id="story-description">Saksikan kisah inspiratif kami dalam membangun dan berinteraksi dengan masyarakat Desa Cinta Maju.</p>
        </div>
    </div>
    </div>


    <script>
document.addEventListener('DOMContentLoaded', () => {
    const storyModeOverlay = document.getElementById('story-mode-overlay');
    const storyModeBtn = document.getElementById('story-mode-btn');
    const closeStoryModeBtn = document.querySelector('.close-story-mode');
    const storyModeVideo = document.getElementById('story-mode-video');
    const storyModeImage = document.getElementById('story-mode-image');
    const storyPrevBtn = document.getElementById('story-prev-btn');
    const storyNextBtn = document.getElementById('story-next-btn');
    const storyTitle = document.getElementById('story-title');
    const storyDescription = document.getElementById('story-description');

    let currentMediaIndex = 0;

    // Define your media files with their types, titles, and descriptions
    const mediaFiles = [
        { type: 'image', src: 'images/1.jpg', title: 'Pemilihan Divisi KKN', description: 'pdd emang semenakutkan itu.' },
        { type: 'image', src: 'images/2.png', title: 'Pembekalan KKN Kab. Samosir', description: 'meeting online untuk pembekalan KKN Kab. Samosir Nantinya.' },
        { type: 'video', src: 'videos/1.mp4', title: 'Full Member KKN', description: 'Foto - foto anggota KKN Kami.' },
        { type: 'video', src: 'videos/2.mp4', title: 'Rapat KKN', description: 'Di Rencong Kupi.' },
        { type: 'video', src: 'videos/3.mp4', title: 'Divisi KKN', description: 'Pembagian Divisi Kelompok KKN kami.' },
        { type: 'video', src: 'videos/4.mp4', title: 'First Meet', description: 'Meeting pertama kelompok KKN kami.' },
        { type: 'video', src: 'videos/5.mp4', title: 'Coming Soon', description: 'Desa CInta Maju.' },
        { type: 'video', src: 'videos/6.mp4', title: 'Trend Tiktok', description: 'Konten Pertama.' },
        { type: 'image', src: 'images/3.png', title: 'Foto Bersama', description: 'Full Member.' },
        { type: 'image', src: 'images/1.png', title: 'Bimbingan Bersama', description: 'Bimbingan bersama ibu Dosen Pembimbing Lapangan @Rosmasiregar.' },
    ];

    function showMedia(index) {
        const media = mediaFiles[index];
        storyModeVideo.style.display = 'none';
        storyModeImage.style.display = 'none';
        storyModeVideo.pause(); // Pause any currently playing video

        storyTitle.textContent = media.title;
        storyDescription.textContent = media.description;

        if (media.type === 'video') {
            storyModeVideo.src = media.src;
            storyModeVideo.style.display = 'block';
            storyModeVideo.load(); // Load the new video
            storyModeVideo.play(); // Autoplay the video
        } else if (media.type === 'image') {
            storyModeImage.src = media.src;
            storyModeImage.style.display = 'block';
        }
    }

    // Event listener for opening story mode
    storyModeBtn.addEventListener('click', () => {
        storyModeOverlay.style.display = 'flex';
        currentMediaIndex = 0; // Start from the first media item
        showMedia(currentMediaIndex);
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });

    // Event listener for closing story mode
    closeStoryModeBtn.addEventListener('click', () => {
        storyModeOverlay.style.display = 'none';
        storyModeVideo.pause(); // Pause video when closing
        storyModeVideo.currentTime = 0; // Reset video to start
        document.body.style.overflow = ''; // Re-enable scrolling
    });

    // Navigation: Next button
    storyNextBtn.addEventListener('click', () => {
        currentMediaIndex = (currentMediaIndex + 1) % mediaFiles.length;
        showMedia(currentMediaIndex);
    });

    // Navigation: Previous button
    storyPrevBtn.addEventListener('click', () => {
        currentMediaIndex = (currentMediaIndex - 1 + mediaFiles.length) % mediaFiles.length;
        showMedia(currentMediaIndex);
    });

    // Optional: Auto-advance after video ends or after a few seconds for images
    storyModeVideo.addEventListener('ended', () => {
        storyNextBtn.click(); // Automatically go to next media after video ends
    });

    // You might want a timer for images to auto-advance, e.g., every 5-7 seconds
    // This requires a bit more logic to clear and set timers based on media type.
    // For simplicity, I've left it manual for now, but can add it if you want.
    
});

document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form'); // Mengambil elemen form
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email'); // Perbaiki di sini
        const messageInput = document.getElementById('message');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari submit secara default (refresh halaman)

            const name = nameInput.value;
            const email = emailInput.value; // **PERBAIKI JADI INI**
            const message = messageInput.value;

            // Nomor WhatsApp tujuan
            const phoneNumber = '6285900267324';

            // Membuat pesan yang akan dikirim ke WhatsApp
            // Gunakan encodeURIComponent untuk memastikan spasi dan karakter khusus lainnya ditangani dengan benar
            const whatsappMessage = encodeURIComponent(
                `Halo, saya ingin bertanya:\n\n` +
                `Nama: ${name}\n` +
                `Email: ${email}\n` +
                `Pesan: ${message}`
            );

            // Membuat URL WhatsApp
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

            // Membuka WhatsApp di tab/jendela baru
            window.open(whatsappURL, '_blank');

            // Opsional: Reset form setelah pengiriman
            form.reset();
        });
    });

document.addEventListener('DOMContentLoaded', () => {
    // --- Preloader (runs once on page load) ---
    // Ensure GSAP library is loaded before this script if you use gsap.to
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            // Check if GSAP is available before using it
            if (typeof gsap !== 'undefined') {
                gsap.to(preloader, { opacity: 0, duration: 1, delay: 1.5, onComplete: () => preloader.style.display = 'none' });
            } else {
                // Fallback if GSAP is not loaded
                preloader.style.opacity = 0;
                preloader.style.display = 'none';
            }
        }
    });

    // --- AOS Initialization ---
    // Ensure AOS library is loaded before this script
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            mirror: false,
        });
    }

    // --- Theme Toggle ---
    const themeToggle = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    }

    // Apply saved theme on load
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        htmlElement.classList.add('dark');
    } else {
        htmlElement.classList.remove('dark');
    }

    // --- Mobile Menu ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('-translate-x-full');
        });
    }

    if (mobileMenuLinks.length > 0 && mobileMenu) {
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full');
            });
        });
    }

    // --- Scroll Progress Bar & Back to Top ---
    const backToTop = document.getElementById('back-to-top');
    const scrollProgressBar = document.getElementById('scroll-progress');

    window.addEventListener('scroll', () => {
        const scrollTop = document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        if (scrollProgressBar) {
            const progress = (scrollTop / scrollHeight) * 100;
            scrollProgressBar.style.width = progress + '%';
        }

        // Show/hide back to top button
        if (backToTop) {
            if (scrollTop > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        }
    });

    // Back to Top functionality
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- Particles.js Initialization ---
    // Ensure particles.js library is loaded before this script
    if (typeof particlesJS === 'function') {
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#F5F5DC" // Beige color for particles
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#F5F5DC", // Beige color for lines
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    }

    // --- Countdown Timer ---
    const countdownDate = new Date("Jul 7, 2025 00:00:00").getTime();
    const countdownElement = document.getElementById("countdown");
    const daysElement = document.getElementById("days");
    const hoursElement = document.getElementById("hours");
    const minutesElement = document.getElementById("minutes");
    const secondsElement = document.getElementById("seconds");

    if (countdownElement && daysElement && hoursElement && minutesElement && secondsElement) {
        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = countdownDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysElement.innerHTML = String(days).padStart(2, '0');
            hoursElement.innerHTML = String(hours).padStart(2, '0');
            minutesElement.innerHTML = String(minutes).padStart(2, '0');
            secondsElement.innerHTML = String(seconds).padStart(2, '0');

            if (distance < 0) {
                clearInterval(countdownInterval);
                countdownElement.innerHTML = "<div class='text-2xl text-white font-bold'>KKN Telah Dimulai!</div>";
            }
        }, 1000);
    }

    // --- Team Member Data ---
    const teamMembersData = {
        moses: {
            name: "Moses Yulianus Kawer", position: "Ketua", division: "BPH",  photo: "moses.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/mosesyk" }, { platform: "linkedin", url: "https://linkedin.com/in/mosesyk" }]
        },
        juni: {
            name: "Juni Didik Harefa", position: "Wakil Ketua", division: "BPH",  photo: "juni.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/junidh" }]
        },
        helga: {
            name: "Helga Chrisanta", position: "Sekretaris 1", division: "BPH", nim: "5222142002", major: "Tata Boga", photo: "helga.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/helgacr" }]
        },
        cindi: {
            name: "Cindi Oktavia Mendrova", position: "Sekretaris 2", division: "BPH",  photo: "cindi.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/cindioct" }]
        },
        duana: {
            name: "Duana Angel Simanjutak", position: "Bendahara", division: "BPH",  photo: "duana.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/duana.angel" }]
        },
        roulina: {
            name: "Roulina Sinaga", position: "Anggota", division: "PDD",  photo: "roulina.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/roulinas" }]
        },
        esa: {
            name: "Esa Indriyani Bangun", position: "Anggota", division: "PDD",  photo: "esa.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/esa.indriyani" }]
        },
        natasha: {
            name: "Natasha Shan", position: "Anggota", division: "PDD",  photo: "natasha.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/natashashan" }]
        },
        fidelia: {
            name: "Fidelia Beatrice", position: "Anggota", division: "PDD",  photo: "fidelia.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/fideliab" }]
        },
        zaytuni: {
            name: "Zaytuni Nadya", position: "Anggota", division: "Acara",  photo: "zaytuni.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/zaytuninadya" }]
        },
        junica: {
            name: "Junica Hizkia", position: "Anggota", division: "Acara",  photo: "junica.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/zaytuninadya" }]
        },
        defa: {
            name: "Defa Zahara", position: "Anggota", division: "Acara",  photo: "defa.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/zaytuninadya" }]
        },
        vino: {
            name: "Vino Dwi Syahputra", position: "Anggota", division: "Acara",  photo: "vino.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/vinodwis" }]
        },
        angelina: {
            name: "Angelina Damanik", position: "Anggota", division: "Acara",  photo: "angelina.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/angelinad" }]
        },
        rizky: {
            name: "Rizky Ananda", position: "Anggota", division: "Acara", photo: "rizky.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/rizkyananda" }]
        },
        andre: {
            name: "Andre Girsang", position: "Anggota", division: "Humas",  photo: "andre.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/andregirsang" }]
        },
        nila: {
            name: "Nila Rosaria Tamba", position: "Anggota", division: "Humas",  photo: "nila.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/nilarosaria" }]
        },
        nadin: {
            name: "Nadin Chairani", position: "Anggota", division: "Humas",  photo: "nadin.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/nadin_chairani" }]
        },
        eka: {
            name: "Eka Lestari", position: "Anggota", division: "Konsumsi", photo: "eka.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/ekalestari" }]
        },
        sabaria: {
            name: "Sabaria Siagian", position: "Anggota", division: "Konsumsi",  photo: "sabaria.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/sabariasiagian" }]
        },
        ruth: {
            name: "Ruth Novita", position: "Anggota", division: "Konsumsi",  photo: "ruth.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/ruthnovita" }]
        },
        jepri: {
            name: "Jepri Alexander Padang", position: "Anggota", division: "PTT",  photo: "jepri.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/jeprialexander" }]
        },
        ceri: {
            name: "Ceri Marsel Tarigan", position: "Anggota", division: "PTT",  photo: "ceri.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/cerimarsel" }]
        },
        nurazizah: {
            name: "Nur Azizah", position: "Anggota", division: "PTT",  photo: "nurazizah.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/nurazizah" }]
        },
        dimas: {
            name: "Dimas Anugrah", position: "Anggota", division: "PTT",  photo: "dimas.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/dimasanugrah" }]
        },
        venny: {
            name: "Venny Desriani Sagala", position: "Anggota", division: "PTT",  photo: "venny.jpg",
            socials: [{ platform: "instagram", url: "https://instagram.com/cerimarsel" }]
        }
    };

    // --- Member Detail Modal Logic ---
    const memberDetailModal = document.getElementById('member-detail-modal');
    const closeModalButtons = document.querySelectorAll('.close-modal');
    const memberDetailButtons = document.querySelectorAll('.member-detail-btn');
    const modalMemberPhoto = document.getElementById('modal-member-photo'); // Get the image element in the modal

    memberDetailButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const memberId = event.target.dataset.member;
            const member = teamMembersData[memberId];

            if (member) {
                // Set photo in modal
                modalMemberPhoto.src = `members/${member.photo}`; // Path to the member's photo
                modalMemberPhoto.alt = `Foto ${member.name}`;

                document.getElementById('modal-member-name').textContent = member.name;
                document.getElementById('modal-member-position').textContent = member.position;
                document.getElementById('modal-member-division').textContent = `Divisi ${member.division}`;
                document.getElementById('modal-member-nim').textContent = `NIM: ${member.nim}`;
                document.getElementById('modal-member-major').textContent = `Jurusan: ${member.major}`;

                const socialsContainer = document.getElementById('modal-member-socials');
                socialsContainer.innerHTML = ''; // Clear previous socials

                member.socials.forEach(social => {
                    const link = document.createElement('a');
                    link.href = social.url;
                    link.target = '_blank';
                    link.classList.add('text-gray-600', 'dark:text-gray-300', 'hover:text-maroon', 'transition-colors');

                    let iconClass = '';
                    if (social.platform === 'instagram') {
                        iconClass = 'fab fa-instagram';
                    } else if (social.platform === 'linkedin') {
                        iconClass = 'fab fa-linkedin-in';
                    } else if (social.platform === 'twitter') {
                        iconClass = 'fab fa-twitter';
                    }

                    link.innerHTML = `<i class="${iconClass} text-2xl"></i>`;
                    socialsContainer.appendChild(link);
                });

                memberDetailModal.classList.remove('hidden'); // Show the modal
                memberDetailModal.querySelector('div').classList.add('scale-100'); // Animate in
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            }
        });
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            memberDetailModal.querySelector('div').classList.remove('scale-100'); // Animate out
            memberDetailModal.querySelector('div').classList.add('scale-95'); // Reset scale for next open
            setTimeout(() => {
                memberDetailModal.classList.add('hidden'); // Hide after animation
                document.body.style.overflow = ''; // Re-enable scrolling
            }, 300); // Match this timeout with your transition duration
        });
    });

    // Optional: Close modal when clicking outside of it
    memberDetailModal.addEventListener('click', (event) => {
        if (event.target === memberDetailModal) {
            memberDetailModal.querySelector('div').classList.remove('scale-100');
            memberDetailModal.querySelector('div').classList.add('scale-95');
            setTimeout(() => {
                memberDetailModal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }
    });

    // --- Full Photo Overlay Logic ---
    const fullPhotoOverlay = document.getElementById('full-photo-overlay');
    const fullPhotoView = document.getElementById('full-photo-view');
    const closeFullPhotoBtn = document.querySelector('.close-full-photo');

    // Get all team member images from the grid
    const teamMemberImages = document.querySelectorAll('.team-member .w-28.h-28 img');

    // Add click listener to each team member image in the grid
    teamMemberImages.forEach(img => {
        img.addEventListener('click', () => {
            fullPhotoView.src = img.src;
            fullPhotoOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    });

    // Add click listener for the image inside the detail modal
    if (modalMemberPhoto) {
        modalMemberPhoto.addEventListener('click', () => {
            fullPhotoView.src = modalMemberPhoto.src;
            fullPhotoOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
    }

    // Close full photo overlay
    if (closeFullPhotoBtn) {
        closeFullPhotoBtn.addEventListener('click', () => {
            fullPhotoOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        });
    }

    // Close full photo overlay by clicking outside the image
    if (fullPhotoOverlay) {
        fullPhotoOverlay.addEventListener('click', (event) => {
            if (event.target === fullPhotoOverlay) {
                fullPhotoOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });
    }

    // --- Filter and Search Functionality ---
    const filterButtons = document.querySelectorAll('.filter-btn');
    const teamMembers = document.querySelectorAll('.team-member');
    const searchInput = document.getElementById('search-input');

    if (filterButtons.length > 0 && teamMembers.length > 0 && searchInput) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-maroon', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'dark:bg-gray-700'));
                button.classList.add('active', 'bg-maroon', 'text-white');
                button.classList.remove('bg-gray-200', 'dark:bg-gray-700');

                const filter = button.dataset.filter;
                filterTeamMembers(filter, searchInput.value.toLowerCase());
            });
        });

        searchInput.addEventListener('keyup', () => {
            const activeFilterElement = document.querySelector('.filter-btn.active');
            const activeFilter = activeFilterElement ? activeFilterElement.dataset.filter : 'all';
            filterTeamMembers(activeFilter, searchInput.value.toLowerCase());
        });
    }

    function filterTeamMembers(filter, searchTerm) {
        teamMembers.forEach(member => {
            const division = member.dataset.division;
            const name = member.querySelector('h3').textContent.toLowerCase();
            const position = member.querySelector('p:nth-of-type(1)').textContent.toLowerCase();
            const memberData = teamMembersData[member.querySelector('.member-detail-btn').dataset.member];
            const nim = memberData ? memberData.nim.toLowerCase() : '';
            const major = memberData ? memberData.major.toLowerCase() : '';

            const matchesFilter = (filter === 'all' || division === filter);
            const matchesSearch = (name.includes(searchTerm) || position.includes(searchTerm) || nim.includes(searchTerm) || major.includes(searchTerm));

            if (matchesFilter && matchesSearch) {
                member.style.display = 'block';
            } else {
                member.style.display = 'none';
            }
        });
    }

    // Initial filter on page load
    filterTeamMembers('all', '');

    // --- Story Mode (Video/Image Player) ---
    // Variables for Story Mode are already declared at the very top of the DOMContentLoaded.
    // They are correctly scoped for this section.

    // Define your media files with their types, titles, and descriptions
    const mediaFiles = [
        { type: 'image', src: 'images/1.jpg', title: 'Pemilihan Divisi KKN', description: 'pdd emang semenakutkan itu.' },
        { type: 'image', src: 'images/2.png', title: 'Pembekalan KKN Kab. Samosir', description: 'meeting online untuk pembekalan KKN Kab. Samosir Nantinya.' },
        { type: 'video', src: 'videos/1.mp4', title: 'Full Member KKN', description: 'Foto - foto anggota KKN Kami.' },
        { type: 'video', src: 'videos/2.mp4', title: 'Rapat KKN', description: 'Di Rencong Kupi.' },
        { type: 'video', src: 'videos/3.mp4', title: 'Divisi KKN', description: 'Pembagian Divisi Kelompok KKN kami.' },
        { type: 'video', src: 'videos/4.mp4', title: 'First Meet', description: 'Meeting pertama kelompok KKN kami.' },
        { type: 'video', src: 'videos/5.mp4', title: 'Coming Soon', description: 'Desa CInta Maju.' },
        { type: 'video', src: 'videos/6.mp4', title: 'Trend Tiktok', description: 'Konten Pertama.' },
        { type: 'image', src: 'images/3.png', title: 'Foto Bersama', description: 'Full Member.' },
        { type: 'image', src: 'images/1.png', title: 'Bimbingan Bersama', description: 'Bimbingan bersama ibu Dosen Pembimbing Lapangan @Rosmasiregar.' },
    ];

    function showMedia(index) {
        if (mediaFiles.length === 0) return; // Exit if no media

        const media = mediaFiles[index];
        if (storyModeVideo) storyModeVideo.pause();
        if (storyModeVideo) storyModeVideo.currentTime = 0;

        // Hide both elements initially
        if (storyModeVideo) storyModeVideo.style.display = 'none';
        if (storyModeImage) storyModeImage.style.display = 'none';

        if (media.type === 'video') {
            if (storyModeVideo) {
                storyModeVideo.src = media.src;
                storyModeVideo.style.display = 'block';
                storyModeVideo.load(); // Load the new video
                storyModeVideo.play(); // Autoplay the video
            }
        } else if (media.type === 'image') {
            if (storyModeImage) {
                storyModeImage.src = media.src;
                storyModeImage.style.display = 'block';
            }
        }

        if (storyTitle) storyTitle.textContent = media.title || '';
        if (storyDescription) storyDescription.textContent = media.description || '';
    }

    // Event listener for opening story mode
    if (storyModeBtn) {
        storyModeBtn.addEventListener('click', () => {
            if (storyModeOverlay) storyModeOverlay.style.display = 'flex';
            currentMediaIndex = 0; // Start from the first media item
            showMedia(currentMediaIndex);
            document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
        });
    }

    // Event listener for closing story mode
    if (closeStoryModeBtn) {
        closeStoryModeBtn.addEventListener('click', () => {
            if (storyModeOverlay) storyModeOverlay.style.display = 'none';
            if (storyModeVideo) storyModeVideo.pause(); // Pause video when closing
            if (storyModeVideo) storyModeVideo.currentTime = 0; // Reset video to start
            document.body.style.overflow = ''; // Re-enable scrolling
        });
    }

    // Navigation: Next button
    if (storyNextBtn) {
        storyNextBtn.addEventListener('click', () => {
            currentMediaIndex = (currentMediaIndex + 1) % mediaFiles.length;
            showMedia(currentMediaIndex);
        });
    }

    // Navigation: Previous button
    if (storyPrevBtn) {
        storyPrevBtn.addEventListener('click', () => {
            currentMediaIndex = (currentMediaIndex - 1 + mediaFiles.length) % mediaFiles.length;
            showMedia(currentMediaIndex);
        });
    }

    // Optional: Auto-advance after video ends
    if (storyModeVideo) {
        storyModeVideo.addEventListener('ended', () => {
            if (storyNextBtn) storyNextBtn.click(); // Automatically go to next media after video ends
        });
    }
});
</script>
</body>
</html>