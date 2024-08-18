<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">


    <style>
        html {
            scroll-behavior: smooth;
        }

        .swiper-container {
            width: 100%;
            height: 100vh; /* Memastikan kontainer Swiper memiliki tinggi penuh viewport */
        }
        .swiper-slide {
            background-size: 110% auto; /* Mengatur ukuran gambar sedikit lebih kecil dari 100% */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            height: 100%; /* Pastikan slide menutupi penuh */
        }
        .swiper-slide .bg-black {
            z-index: 1; /* Overlay berada di atas gambar */
        }
        .swiper-slide .text-center {
            z-index: 2; /* Konten berada di atas overlay */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white fixed w-full z-10 top-0 shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="#" class="flex items-center">
                <img src="https://via.placeholder.com/150x50" alt="Logo" class="h-8">
            </a>
            <div class="hidden md:flex space-x-8"> <!-- Menambah jarak antar item -->
                <a href="#home" class="hover:text-yellow-300">Home</a>
                <a href="#products" class="hover:text-yellow-300">Products</a>
                <a href="#about" class="hover:text-yellow-300">About Us</a>
                <a href="#collect" class="hover:text-yellow-300">Collect</a>
                <a href="#faqs" class="hover:text-yellow-300">FAQs</a>
                <a href="{{ route('login') }}" class="hover:text-yellow-300">
                    <i class="fas fa-user"></i>
                </a>
            </div>
            <button class="md:hidden text-white" id="navbar-toggler">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative text-white py-0 text-center overflow-hidden">
        <div class="swiper-container hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/baju adat.jpg') }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="relative z-10 container mx-auto h-full flex items-center justify-center">
                        <div>
                            <h1 class="text-5xl font-bold mb-4">Pakaian Adat Nusantara</h1>
                            <p class="text-lg mb-8">Menyambut Hari Kemerdekaan dengan Cinta pada Budaya</p>
                            <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-3 rounded-lg text-lg font-semibold">Belanja Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/1.jpg') }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="relative z-10 container mx-auto h-full flex items-center justify-center">
                        <div>
                            <h1 class="text-5xl font-bold mb-4">Keindahan Busana Tradisional</h1>
                            <p class="text-lg mb-8">Kenali lebih dekat warisan budaya Indonesia</p>
                            <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-3 rounded-lg text-lg font-semibold">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/adat.jpg') }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="relative z-10 container mx-auto h-full flex items-center justify-center">
                        <div>
                            <h1 class="text-5xl font-bold mb-4">Busana Adat untuk Semua</h1>
                            <p class="text-lg mb-8">Pakaian adat untuk segala usia dan acara</p>
                            <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-3 rounded-lg text-lg font-semibold">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 mt-20"> <!-- Menambahkan margin top untuk jarak -->
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Tentang Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Misi Kami</h3>
                    <p>Kami berdedikasi untuk melestarikan dan memperkenalkan keindahan pakaian adat Nusantara. Dengan sentuhan modern, kami ingin memastikan bahwa budaya tradisional tetap relevan dan dihargai dalam dunia yang terus berkembang.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Tim Kami</h3>
                    <p>Tim kami terdiri dari para ahli dan pecinta budaya yang berdedikasi untuk menyediakan pakaian adat berkualitas tinggi. Kami berkomitmen untuk memberikan layanan terbaik dan pengalaman berbelanja yang memuaskan bagi setiap pelanggan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Our Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($products as $product)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ Storage::url('products/'.$product->image) }}" class="w-full h-64 object-cover" alt="{{ $product->title }}">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold">{{ $product->title }}</h5>
                        <p class="text-lg text-gray-700">{{ number_format($product->price, 2) }} €</p>
                        <p class="text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-8 text-center">
                {!! $products->links() !!}
            </div>
        </div>
    </section>



    <!-- Featured Collections Section -->
    <section id="collect" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Koleksi Unggulan Pakaian Adat</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Collection 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/collection1.jpg') }}" class="w-full h-64 object-cover" alt="Koleksi 1">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-4">Koleksi Batik Tradisional</h5>
                        <p class="text-gray-600 mb-4">Menampilkan berbagai desain batik dari berbagai daerah di Indonesia, setiap desain mewakili keunikan dan keindahan budaya lokal.</p>
                        <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-2 rounded-lg font-semibold">Lihat Koleksi</a>
                    </div>
                </div>
                <!-- Collection 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/collection2.jpg') }}" class="w-full h-64 object-cover" alt="Koleksi 2">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-4">Koleksi Kebaya Modern</h5>
                        <p class="text-gray-600 mb-4">Kebaya dengan sentuhan modern yang tetap mempertahankan keanggunan tradisional, cocok untuk berbagai acara formal dan perayaan.</p>
                        <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-2 rounded-lg font-semibold">Lihat Koleksi</a>
                    </div>
                </div>
                <!-- Collection 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/collection3.jpg') }}" class="w-full h-64 object-cover" alt="Koleksi 3">
                    <div class="p-6">
                        <h5 class="text-xl font-semibold mb-4">Koleksi Tenun Nusantara</h5>
                        <p class="text-gray-600 mb-4">Tenun yang dihasilkan secara tradisional dengan teknik tenun yang telah diwariskan turun-temurun, menawarkan keindahan dan kekuatan setiap helai kain.</p>
                        <a href="#products" class="bg-yellow-300 text-gray-900 px-6 py-2 rounded-lg font-semibold">Lihat Koleksi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Apa Kata Pelanggan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-lg">"Kualitas dan layanan yang sangat memuaskan! Pakaian adat yang saya beli sangat indah dan sesuai dengan deskripsi."</p>
                    <p class="mt-4 font-semibold">John Doe</p>
                    <p class="text-gray-600">Pengusaha</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-lg">"Pengalaman berbelanja yang luar biasa. Pakaian adatnya berkualitas dan sangat nyaman dipakai."</p>
                    <p class="mt-4 font-semibold">Jane Smith</p>
                    <p class="text-gray-600">Manajer Pemasaran</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-lg">"Sangat direkomendasikan untuk siapa saja yang mencari pakaian adat yang elegan dan berkualitas tinggi."</p>
                    <p class="mt-4 font-semibold">Alice Johnson</p>
                    <p class="text-gray-600">Freelancer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Pertanyaan yang Sering Diajukan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Apa kebijakan pengembalian Anda?</h5>
                    <p>Kami menerima pengembalian dalam waktu 30 hari setelah pembelian. Pastikan pakaian dalam kondisi asli dan belum digunakan.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Bagaimana cara melacak pesanan saya?</h5>
                    <p>Setelah pesanan dikirim, Anda akan menerima email dengan nomor pelacakan. Anda dapat melacak status pesanan melalui tautan dalam email tersebut.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Apakah Anda menawarkan pengiriman internasional?</h5>
                    <p>Ya, kami menawarkan pengiriman internasional. Biaya pengiriman akan dihitung berdasarkan lokasi dan berat paket.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Bisakah saya mengubah pesanan setelah melakukan pemesanan?</h5>
                    <p>Kami dapat mengubah pesanan dalam waktu 24 jam setelah pemesanan. Silakan hubungi layanan pelanggan kami segera setelah melakukan perubahan.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="mb-2">&copy; 2024 MyBrand. All rights reserved.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-yellow-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-yellow-300"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
    <script>
       // Initialize Swiper
    var swiper = new Swiper('.hero-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
    </script>
</body>
</html>

