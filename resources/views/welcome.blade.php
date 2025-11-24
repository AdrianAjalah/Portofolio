<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Adrian | IT Support Specialist</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3b82f6', // Biru IT
                        dark: '#0f172a',    // Latar Gelap
                        card: '#1e293b',    // Latar Kartu
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark text-slate-300 antialiased">

    <nav class="fixed w-full z-50 bg-dark/90 backdrop-blur-sm border-b border-slate-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-white tracking-wider">
                PORTOFOLIO<span class="text-primary"> </span>
            </a>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-primary transition">Home</a>
                <a href="#about" class="hover:text-primary transition">Tentang</a>
                <a href="#skills" class="hover:text-primary transition">Keahlian</a>
                <a href="#contact" class="hover:text-primary transition">Kontak</a>
            </div>
            <button class="md:hidden text-2xl"><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <section id="home" class="min-h-screen flex items-center justify-center pt-16">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left mt-10 md:mt-0">
                <h2 class="text-primary font-semibold text-lg mb-2">Halo, Saya</h2>
                <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight mb-4">
                    Adrian Dzariat <br> Maulana
                </h1>
                <p class="text-xl text-slate-400 mb-8">
                    Mahasiswa Teknik Informatika & <br>
                    <span class="text-white font-semibold">IT Support Specialist</span>
                </p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="#contact" class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-full transition font-semibold">
                        Hubungi Saya
                    </a>
                    <a href="#about" class="border border-slate-600 hover:border-white hover:text-white px-8 py-3 rounded-full transition">
                        Lihat Profil
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center mt-8 md:mt-0 relative z-10">
    <div class="relative w-64 md:w-72 h-auto rounded-2xl overflow-hidden border-4 border-slate-800 shadow-2xl shadow-primary/20 group">
        
        <div class="absolute inset-0 bg-primary/20 blur-xl -z-10 group-hover:bg-primary/40 transition duration-500"></div>

        <img src="{{ asset('img/Ian.png') }}" 
             alt="Adrian Dzariat" 
             class="object-cover w-full h-full transform transition duration-500 hover:scale-105">
             
        <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-dark/80 to-transparent"></div>
    </div>
</div>
        </div>
    </section>

    <section id="about" class="py-20 bg-slate-900/50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">Tentang Saya</h2>
                <div class="w-20 h-1 bg-primary mx-auto mt-2"></div>
            </div>
            
            <div class="max-w-4xl mx-auto bg-card p-8 rounded-2xl border border-slate-800 shadow-xl">
                <p class="text-lg leading-relaxed mb-6">
                    Mahasiswa Teknik Informatika yang bersemangat dalam mengubah teori menjadi solusi teknis yang nyata. 
                    Dengan pengalaman praktis sebagai <span class="text-primary font-semibold">Asisten Laboratorium di LAB ICT</span>, 
                    saya telah mengembangkan kompetensi inti dalam IT Support Tier-1, troubleshooting, serta administrasi jaringan dasar.
                </p>
                <p class="text-lg leading-relaxed">
                    Saya berkomitmen untuk terus mencoba hal baru. Kemampuan analisis teknis dan pemecahan masalah 
                    saya manfaatkan untuk memastikan sistem berjalan optimal. Saat ini, saya aktif mencari peluang 
                    magang untuk mengaplikasikan ilmu saya di lingkungan profesional.
                </p>
                
                <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div class="p-4 bg-dark rounded-lg">
                        <h3 class="text-3xl font-bold text-white">2+</h3>
                        <p class="text-sm text-slate-400">Tahun Pengalaman</p>
                    </div>
                    <div class="p-4 bg-dark rounded-lg">
                        <h3 class="text-3xl font-bold text-white">37+</h3>
                        <p class="text-sm text-slate-400">Unit PC Dikelola</p>
                    </div>
                    <div class="p-4 bg-dark rounded-lg">
                        <h3 class="text-3xl font-bold text-white">10+</h3>
                        <p class="text-sm text-slate-400">User Terbantu/Hari</p>
                    </div>
                    <div class="p-4 bg-dark rounded-lg">
                        <h3 class="text-3xl font-bold text-white">100%</h3>
                        <p class="text-sm text-slate-400">Dedikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">Keahlian Teknis</h2>
                <p class="text-slate-400 mt-2">Alat dan teknologi yang saya kuasai</p>
                <div class="w-20 h-1 bg-primary mx-auto mt-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                
                <div class="bg-card p-6 rounded-xl border border-slate-800 hover:border-primary transition group hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition">
                        <i class="fas fa-screwdriver-wrench text-primary text-xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Hardware & Support</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>PC Assembly & Maintenance</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Troubleshooting Hardware</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Printer & Peripheral Setup</li>
                    </ul>
                </div>

                <div class="bg-card p-6 rounded-xl border border-slate-800 hover:border-primary transition group hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition">
                        <i class="brands fa-linux text-primary text-xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Software & OS</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Windows & Linux (Mint/Ubuntu)</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Instalasi & Migrasi Sistem</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Microsoft Office Suite</li>
                    </ul>
                </div>

                <div class="bg-card p-6 rounded-xl border border-slate-800 hover:border-primary transition group hover:-translate-y-2">
                    <div class="w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition">
                        <i class="fas fa-network-wired text-primary text-xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Networking</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>LAN/WLAN Configuration</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Mikrotik Basic</li>
                        <li><i class="fas fa-check text-primary text-xs mr-2"></i>Cabling & Crimping</li>
                    </ul>
                </div>
                <div class="bg-card p-6 rounded-xl border border-slate-800 hover:border-primary transition group hover:-translate-y-2">
    <div class="w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition">
        <i class="fas fa-code text-primary text-xl group-hover:text-white"></i>
    </div>
    
    <h3 class="text-xl font-bold text-white mb-4">Web Development</h3>
    
    <ul class="space-y-3 text-slate-400">
        <li class="flex items-center">
            <i class="fab fa-laravel text-red-600 text-lg w-6 mr-2"></i> 
            <span>Laravel</span>
        </li>
        <li class="flex items-center">
            <i class="fas fa-wind text-cyan-400 text-lg w-6 mr-2"></i> 
            <span>Tailwind CSS</span>
        </li>
        <li class="flex items-center">
            <i class="fab fa-bootstrap text-purple-600 text-lg w-6 mr-2"></i> 
            <span>Bootstrap</span>
        </li>
        <li class="flex items-center">
            <i class="fab fa-php text-blue-500 text-lg w-6 mr-2"></i> 
            <span>PHP Native</span>
        </li>
        <li class="flex items-center">
            <i class="fas fa-server text-orange-500 text-lg w-6 mr-2"></i> 
            <span>XAMPP / Apache</span>
        </li>
    </ul>
</div>

            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-gradient-to-b from-dark to-slate-900">
        <div class="container mx-auto px-6 text-center">
            
            <h2 class="text-3xl font-bold text-white mb-6">Siap Berkolaborasi?</h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10">
                Saya saat ini terbuka untuk kesempatan <span class="text-primary font-semibold">Magang (Internship)</span> 
                dan proyek freelance di bidang IT Support & Network Administration.
                Mari diskusikan bagaimana saya bisa membantu tim Anda.
            </p>

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adriandzariatmaulana@gmail.com" target="_blank" 
               class="inline-flex items-center bg-primary hover:bg-blue-600 text-white font-bold py-4 px-8 rounded-full transition transform hover:scale-105 shadow-lg shadow-blue-500/30">
                <i class="fas fa-paper-plane mr-3"></i> Kirim Email Sekarang
            </a>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="p-6 border border-slate-800 rounded-xl bg-card hover:border-primary transition group">
                    <i class="fas fa-envelope text-3xl text-slate-500 group-hover:text-primary mb-4 block"></i>
                    <h3 class="text-white font-semibold mb-1">Email</h3>
                    <p class="text-slate-400 text-sm">adriandzariatmaulana@gmail.com</p>
                </div>

                <div class="p-6 border border-slate-800 rounded-xl bg-card hover:border-primary transition group">
                    <i class="fas fa-map-marker-alt text-3xl text-slate-500 group-hover:text-primary mb-4 block"></i>
                    <h3 class="text-white font-semibold mb-1">Lokasi</h3>
                    <p class="text-slate-400 text-sm">Tangerang, Indonesia</p>
                </div>

                <div class="p-6 border border-slate-800 rounded-xl bg-card hover:border-primary transition group">
                    <i class="fab fa-linkedin text-3xl text-slate-500 group-hover:text-primary mb-4 block"></i>
                    <h3 class="text-white font-semibold mb-1">LinkedIn</h3>
                    <a href="https://www.linkedin.com/in/adriandm" target="_blank" class="text-primary text-sm hover:underline">
                        Lihat Profil &rarr;
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-dark border-t border-slate-800 py-8 text-center">
        <p class="text-slate-500">
            &copy; 2025 Adrian Dzariat Maulana. Dibuat dengan <span class="text-red-500">❤</span> menggunakan Laravel & Tailwind.
        </p>
        <div class="flex justify-center space-x-6 mt-4">
    
    <a href="https://www.linkedin.com/in/adriandm" target="_blank" class="text-slate-400 hover:text-white text-xl transition">
        <i class="fab fa-linkedin"></i>
    </a>

    <a href="https://github.com/AdrianAjalah" target="_blank" class="text-slate-400 hover:text-white text-xl transition">
        <i class="fab fa-github"></i>
    </a>

    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=adriandzariatmaulana@gmail.com" target="_blank" class="text-slate-400 hover:text-white text-xl transition">
    <i class="fas fa-envelope"></i>
</a>
</div>
    </footer>

</body>
</html>