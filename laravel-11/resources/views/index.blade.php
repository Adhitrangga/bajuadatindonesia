<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Batique E-commerce</title>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header data-aos="fade-down">
    <div class="container">

        <div class="overlay" data-overlay data-aos="fade"></div>

        <a href="#" class="logo" data-aos="fade-right">
           <h2> Batique.</h2>
        </a>

        <nav class="navbar" data-navbar data-aos="fade-left">
            <ul class="navbar-list">

                <li>
                    <a href="#home" class="navbar-link" data-nav-link data-aos="fade-up">Home</a>
                </li>

                <li>
                    <a href="#featured" class="navbar-link" data-nav-link data-aos="fade-up" data-aos-delay="100">Product</a>
                </li>

                <li>
                    <a href="#about" class="navbar-link" data-nav-link data-aos="fade-up" data-aos-delay="200">About us</a>
                </li>

                <li>
                    <a href="#blog" class="navbar-link" data-nav-link data-aos="fade-up" data-aos-delay="300">Blog</a>
                </li>

            </ul>
        </nav>

        <div class="header-actions">

            <div class="header-contact" data-aos="fade-left">
                <a href="tel:88002345678" class="contact-link">8 800 234 56 78</a>
                <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
            </div>

            <a href="#featured" class="btn" aria-labelledby="aria-label-txt" data-aos="zoom-in">
                <ion-icon name="shirt-outline"></ion-icon>
                <span id="aria-label-txt">Explore Batique</span>
            </a>

            <a href="{{ route('login') }}" class="btn user-btn" aria-label="Profile" data-aos="zoom-in" data-aos-delay="100">
                <ion-icon name="person-outline"></ion-icon>
            </a>

            <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu" data-aos="fade-up">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
            </button>

        </div>

    </div>
</header>






  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" data-aos="fade-up">
    <div class="container">

        <div class="hero-content" data-aos="fade-right">
            <h2 class="h1 hero-title">Menjadi Anak Indonesia, Menggunakan Batik</h2>
            <p class="hero-text">Jagalah budaya batik di Indonesia!</p>
        </div>

        <div class="hero-banner" data-aos="fade-left"></div>

        <form action="" class="hero-form" data-aos="zoom-in" data-aos-delay="200">

            <div class="input-wrapper">
                <label for="input-1" class="input-label">Batique, model, or brand</label>
                <input type="text" name="car-model" id="input-1" class="input-field" placeholder="What kind are you need?">
            </div>

            <div class="input-wrapper">
                <label for="input-2" class="input-label">Price list</label>
                <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Start from 100k">
            </div>

            <div class="input-wrapper">
                <label for="input-3" class="input-label">Discount Voucher</label>
                <input type="text" name="year" id="input-3" class="input-field" placeholder="Disc 50% August 17th">
            </div>

            <button type="submit" class="btn" data-aos="fade-up" data-aos-delay="300">Search</button>

        </form>

    </div>
</section>


<!-- About us -->
<section class="about-sec section" id="about" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5" data-aos="fade-down">
                    <h2 class="sec-sub-title mb-3">Tentang Kami</h2>
                    <h2 class="h2-title">Mengapa Belanja di sini?</h2>
                    <div class="sec-title-shape mb-4" data-aos="zoom-in">
                        <img src="assets/images/title-shape.svg" alt="">
                    </div>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Di Batique, kami lebih dari sekadar penjual kain batik. Kami adalah pecinta budaya Indonesia yang ingin membawa keindahan dan warisan batik ke dalam hidup Anda. Setiap kain yang kami tawarkan adalah hasil dari ketekunan para pengrajin lokal, yang mengabdikan waktu dan keterampilan mereka untuk menciptakan karya seni yang unik dan bermakna. Kain di sini memiliki kualitas yang akan bertahan meskipun zaman semakin maju, selain berkualitas kain batik di Batique juga selalu menerapkan motif yang unik dan warna yang sangat berbudaya sehingga kesan khas Indonesia-nya masih menyatu walaupun seiring berkembangnya zaman nanti.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-video" data-aos="fade-up" data-aos-delay="200">
                    <!-- Video Embed -->
                    <video id="aboutVideo" class="about-video-content" autoplay muted loop>
                        <source src="{{ asset('images/vidbatik.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>









      <!-- 
        - #FEATURED 
      -->
      <section class="section featured" id="featured" data-aos="fade-up">
    <div class="container">
        <div class="title-wrapper" data-aos="fade-down">
            <h2 class="h2 section-title">Produk Kami</h2>
            <a href="#" class="featured-link" data-aos="zoom-in" data-aos-delay="100">
                <span>View more</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>

        <ul class="featured-list">
            @foreach ($products as $product)
            <li data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="featured-card" data-aos="fade-up" data-aos-delay="200">
                    <figure class="card-banner" data-aos="zoom-in">
                        <img src="{{ Storage::url('products/'.$product->image) }}" alt="{{ $product->title }}" loading="lazy" width="440" height="300" class="w-100">
                    </figure>

                    <div class="card-content">
                        <div class="card-title-wrapper" data-aos="fade-left">
                            <h3 class="h3 card-title">
                                <a href="#">{{ $product->title }}</a>
                            </h3>
                            <data class="year" value="2021">2024</data>
                        </div>

                        <ul class="card-list" data-aos="fade-up">
                            <li class="card-list-item" data-aos="flip-left">
                                <ion-icon name="people-outline"></ion-icon>
                                <span class="card-item-text">Available</span>
                            </li>
                            <li class="card-list-item" data-aos="flip-left" data-aos-delay="100">
                                <ion-icon name="flash-outline"></ion-icon>
                                <span class="card-item-text">Discount sale</span>
                            </li>
                            <li class="card-list-item" data-aos="flip-left" data-aos-delay="200">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <span class="card-item-text">★★★★☆</span>
                            </li>
                            <li class="card-list-item" data-aos="flip-left" data-aos-delay="300">
                                <ion-icon name="thumbs-up-outline"></ion-icon>
                                <span class="card-item-text">Good Condition</span>
                            </li>
                        </ul>

                        <div class="card-price-wrapper" data-aos="fade-up" data-aos-delay="400">
                            <p class="card-price">
                                <strong>Rp. {{ number_format($product->price, 2) }}</strong> / discount 50%
                            </p>
                            <button class="btn fav-btn" aria-label="Add to favourite list" data-aos="zoom-in">
                                <ion-icon name="heart-outline"></ion-icon>
                            </button>
                            <button class="btn" data-aos="zoom-in" data-aos-delay="100">Buy Now</button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>







      <!-- 
        - #Our Goals
      -->

<section class="section get-start" id="goals-vision" data-aos="fade-up">
    <div class="container">
        <h2 class="h2 section-title" data-aos="fade-down">Our Goals & Vision</h2>

        <ul class="get-start-list">
            <li data-aos="flip-left" data-aos-delay="100">
                <div class="get-start-card" data-aos="fade-up">
                    <div class="card-icon icon-1" data-aos="zoom-in">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>

                    <h3 class="card-title">Worker</h3>

                    <p class="card-text">
                        Mengumpulkan para pengrajin lokal yang memiliki bakat untuk bekerja pada kami.
                    </p>

                    <a href="#" class="card-link">Join Now!</a>
                </div>
            </li>

            <li data-aos="flip-left" data-aos-delay="200">
                <div class="get-start-card" data-aos="fade-up">
                    <div class="card-icon icon-2" data-aos="zoom-in">
                        <ion-icon name="shield-outline"></ion-icon>
                    </div>

                    <h3 class="card-title">Local Culture</h3>

                    <p class="card-text">
                        Menjaga budaya lokal kami agar Indonesia tidak krisis identitas melalui menjual Kain Batik.
                    </p>
                </div>
            </li>

            <li data-aos="flip-left" data-aos-delay="300">
                <div class="get-start-card" data-aos="fade-up">
                    <div class="card-icon icon-3" data-aos="zoom-in">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>

                    <h3 class="card-title">Client Commitment</h3>

                    <p class="card-text">
                        Membangun kepercayaan dan komitmen antara pelanggan atau klien agar senantiasa membeli produk kami.
                    </p>
                </div>
            </li>

            <li data-aos="flip-left" data-aos-delay="400">
                <div class="get-start-card" data-aos="fade-up">
                        <div class="card-icon icon-4" data-aos="zoom-in">
                            <ion-icon name="gift-outline"></ion-icon>
                        </div>

                        <h3 class="card-title">Donation</h3>

                        <p class="card-text">
                            Kami mendonasikan sebagian pendapatan yang kami dapat dari penjualan di Batique ke pada panti asuhan.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
</section>






      <!-- 
        - #BLOG
      -->

  <section class="section blog" id="blog" data-aos="fade-up">
    <div class="container">
        <h2 class="h2 section-title" data-aos="fade-down">Our Blog</h2>

        <ul class="blog-list has-scrollbar">
            <li data-aos="zoom-in" data-aos-delay="100">
                <div class="blog-card">
                    <figure class="card-banner">
                        <a href="#">
                            <img src="{{ asset('images/blog0.jpeg') }}" loading="lazy" class="w-100">
                        </a>
                        <a href="#" class="btn card-badge">View</a>
                    </figure>
                    <div class="card-content">
                        <h3 class="h3 card-title">
                            <a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing.</a>
                        </h3>
                        <div class="card-meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="2022-01-14">January 14, 2024</time>
                            </div>
                            <div class="comments">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <data value="114">114</data>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li data-aos="zoom-in" data-aos-delay="200">
                <div class="blog-card">
                    <figure class="card-banner">
                        <a href="#">
                            <img src="{{ asset('images/blog9.jpeg') }}" loading="lazy" class="w-100">
                        </a>
                        <a href="#" class="btn card-badge">View</a>
                    </figure>
                    <div class="card-content">
                        <h3 class="h3 card-title">
                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        </h3>
                        <div class="card-meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="2022-01-14">January 14, 2023</time>
                            </div>
                            <div class="comments">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <data value="114">114</data>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li data-aos="zoom-in" data-aos-delay="300">
                <div class="blog-card">
                    <figure class="card-banner">
                        <a href="#">
                            <img src="{{ asset('images/blog8.jpeg') }}" loading="lazy" class="w-100">
                        </a>
                        <a href="#" class="btn card-badge">View</a>
                    </figure>
                    <div class="card-content">
                        <h3 class="h3 card-title">
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </h3>
                        <div class="card-meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="2022-01-14">January 14, 2022</time>
                            </div>
                            <div class="comments">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <data value="114">114</data>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li data-aos="zoom-in" data-aos-delay="400">
                <div class="blog-card">
                    <figure class="card-banner">
                        <a href="#">
                            <img src="{{ asset('images/blog7.jpeg') }}" loading="lazy" class="w-100">
                        </a>
                        <a href="#" class="btn card-badge">View</a>
                    </figure>
                    <div class="card-content">
                        <h3 class="h3 card-title">
                            <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                        </h3>
                        <div class="card-meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="2022-01-14">January 25, 2022</time>
                            </div>
                            <div class="comments">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <data value="114">114</data>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li data-aos="zoom-in" data-aos-delay="500">
                <div class="blog-card">
                    <figure class="card-banner">
                        <a href="#">
                            <img src="{{ asset('images/blogg.jpeg') }}" loading="lazy" class="w-100">
                        </a>
                        <a href="#" class="btn card-badge">View</a>
                    </figure>
                    <div class="card-content">
                        <h3 class="h3 card-title">
                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                        </h3>
                        <div class="card-meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="2022-01-14">January 14, 2020</time>
                            </div>
                            <div class="comments">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                <data value="114">114</data>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  </section>


    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

        <div class="footer-top" data-aos="fade-up">
            <div class="footer-brand" data-aos="fade-right">
                <a href="#" class="logo">
                    <h2>Batique.</h2>
                </a>
                <p class="footer-text">
                    Mari bersama-sama melestarikan keindahan batik dengan menjadikannya bagian dari gaya hidup modern Anda. Kunjungi Batique dan temukan kain batik yang akan membuat Anda jatuh cinta pada seni ini sekali lagi.
                </p>
            </div>

            <ul class="footer-list" data-aos="fade-up" data-aos-delay="100">
                <li>
                    <p class="footer-list-title">Menu</p>
                </li>
                <li>
                    <a href="#" class="footer-link">About us</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Products</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Our Goals</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Blog</a>
                </li>
            </ul>

            <ul class="footer-list" data-aos="fade-up" data-aos-delay="200">
                <li>
                    <p class="footer-list-title">Support</p>
                </li>
                <li>
                    <a href="#" class="footer-link">Help center</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Ask a question</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Privacy policy</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Terms & conditions</a>
                </li>
            </ul>

            <ul class="footer-list" data-aos="fade-up" data-aos-delay="300">
                <li>
                    <p class="footer-list-title">Know More</p>
                </li>
                <li>
                    <a href="#" class="footer-link">Social Media</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Our Office</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Motivation</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Our Company Profile</a>
                </li>
            </ul>
        </div>

        <div class="footer-bottom" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
    <ul class="social-list">
        <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
        </li>
        <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
        </li>
        <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
        </li>
        <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
        </li>
        <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
            </a>
        </li>
        <li>
            <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
            </a>
        </li>
    </ul>

    <p class="copyright">
        &copy; 2024 <a href="#">Batique.com</a>. All Rights Reserved
    </p>
</div>


    </div>
</footer>






  <!-- 
    - custom js link
  -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
  duration: 1200, // Durasi animasi dalam milidetik
});
  </script>
</body>

</html>