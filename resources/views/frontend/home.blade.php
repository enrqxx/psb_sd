@extends('layouts.main')
@section('container')



<!-- 
        - #HERO
      -->

<section class="section hero has-bg-image" id="home" aria-label="home"
    style="background-image: url('./img/hero-bg.svg')">
    <div class="container">

        <div class="hero-content">

            <h1 class="h1 section-title">
                Sekolah Dasar <span class="span">AN-NAHAR</span> adalah Sekolah yang paling keren
            </h1>

            <p class="hero-text">
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit.
            </p>

            <a href="#" class="btn has-before">
                <span class="span">Daftar</span>
                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

        </div>

        <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
                <img src="./img/dudukbersama.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
                <img src="./img/memasak.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="./img/nomer-telp.svg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./img/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

        </figure>
    </div>

    </div>
</section>





<!-- 
        - #CATEGORY
      -->

<section class="section category" aria-label="category">
    <div class="container">

        <p class="section-subtitle">Ekstrakulikuler</p>

        <h2 class="h2 section-title">
            Sekolah Dasar <span class="span">An-Nahar</span> Memiliki Aktivitas Sekolah.
        </h2>

        <p class="section-text">
            Consectetur adipiscing elit sed do eiusmod tempor.
        </p>

        <ul class="grid-list">

            <li>
                <div class="category-card" style="--color: 170, 75%, 41%">

                    <div class="card-icon">
                        <img src="./img/silat.svg" width="40" height="40" loading="lazy" alt="Online Degree Programs"
                            class="img">
                    </div>

                    <h3 class="h3">
                        <a href="#" class="card-title">Pencak Silat</a>
                    </h3>

                    <p class="card-text">
                        Seni bela diri tradisional yang berasal dari Kepulauan Nusantara sed umod tempor.
                    </p>

                    <span class="card-badge">7 Courses</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 351, 83%, 61%">

                    <div class="card-icon">
                        <img src="./img/palette.svg" width="40" height="40" loading="lazy" alt="Non-Degree Programs"
                            class="img">
                    </div>

                    <h3 class="h3">
                        <a href="#" class="card-title">Menggambar</a>
                    </h3>

                    <p class="card-text">
                        Lorem ipsum dolor consec tur elit adicing sed umod tempor umod umodt empor umod umod .
                    </p>

                    <span class="card-badge">4 Courses</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 229, 75%, 58%">

                    <div class="card-icon">
                        <img src="./img/pramuka.svg" width="40" height="40" loading="lazy" alt="Off-Campus Programs"
                            class="img">
                    </div>

                    <h3 class="h3">
                        <a href="#" class="card-title">Pramuka</a>
                    </h3>

                    <p class="card-text">
                        Lorem ipsum dolor consec tur elit adicing sed umod tempor sed umod tempor umod.
                    </p>

                    <span class="card-badge">8 Courses</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 42, 94%, 55%">

                    <div class="card-icon">
                        <img src="./img/batminton.svg" width="40" height="40" loading="lazy"
                            alt="Hybrid Distance Programs" class="img">
                    </div>

                    <h3 class="h3">
                        <a href="#" class="card-title">Badminton</a>
                    </h3>

                    <p class="card-text">
                        Lorem ipsum dolor consec tur elit adicing sed umod tempor sed umod tempor umod.
                    </p>

                    <span class="card-badge">8 Courses</span>

                </div>
            </li>

        </ul>

    </div>
</section>





<!-- 
        - #ABOUT
      -->

<section class="section about" id="about" aria-label="about">
    <div class="container">

        <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
                <img src="./img/sekolah.jpg" width="520" height="370" loading="lazy" alt="about banner"
                    class="img-cover">
            </div>

            <img src="./img/about-shape-1.svg" width="360" height="420" loading="lazy" alt=""
                class="shape about-shape-1">

            <img src="./img/about-shape-2.svg" width="371" height="220" loading="lazy" alt=""
                class="shape about-shape-2">

            <img src="./img/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
                class="shape about-shape-3">

        </figure>

        <div class="about-content">

            <p class="section-subtitle">Tentang Kami</p>

            <h2 class="h2 section-title">
                Lebih dari <span class="span">100+ Siswa</span> telah mendaftar
            </h2>

            <p class="section-text">
                Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore
                dolore magna
                aliquaenim ad
                minim.
            </p>

            <ul class="about-list">

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Membaca Al-Qur'an</span>
                </li>

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Menghafal Al-Qur'an Minimal 3 Juz</span>
                </li>

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Pembelajaran Bahasa Inggris dan Arab dalam Percakapan</span>
                </li>

            </ul>

            <img src="./img/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
                class="shape about-shape-4">

        </div>

    </div>
</section>





<!-- 
        - #COURSE
      -->

<section class="section course" id="courses" aria-label="course">
    <div class="container">

        <p class="section-subtitle">Program Unggulan SD IT An-Nahar</p>

        <h2 class="h2 section-title">Program Unggulan Kami</h2>

        <ul class="grid-list">

            <li>
                <div class="course-card">

                    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="./img/mengaji.jpg" width="370" height="220" loading="lazy"
                            alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                    </figure>
                    <div class="card-content">

                        <span class="badge">Membaca dan Menghafal</span>

                        <h3 class="h3">
                            <a href="#" class="card-title">Membaca Al Qur'an</a>
                        </h3>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, corrupti?
                        </p>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Menghafal</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Membaca</span>
                            </li>

                        </ul>

                    </div>

                </div>
            </li>

            <li>
                <div class="course-card">

                    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="./img/tilawah.jpg" width="370" height="220" loading="lazy"
                            alt="Java Programming Masterclass for Software Developers" class="img-cover">
                    </figure>
                    <div class="card-content">

                        <span class="badge">Pembacaan Al-Qur'an</span>

                        <h3 class="h3">
                            <a href="#" class="card-title">Tilawah Al-Qur'an</a>
                        </h3>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, corrupti?
                        </p>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Tahfizh</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Tahsin Al-Quran</span>
                            </li>

                        </ul>

                    </div>

                </div>
            </li>

            <li>
                <div class="course-card">

                    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                        <img src="./img/menggambar.jpg" width="370" height="220" loading="lazy"
                            alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                    </figure>

                    <div class="card-content">

                        <span class="badge">Belajar dan Membaca</span>

                        <h3 class="h3">
                            <a href="#" class="card-title">Belajar di Alam</a>
                        </h3>

                        <p class="section-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, corrupti?
                        </p>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Membaca</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Belajar di Alam</span>
                            </li>

                        </ul>

                    </div>

                </div>
            </li>

        </ul>
</section>


<!-- 
        - #VIDEO
      -->

<section class="video has-bg-image" aria-label="video" style="background-image: url('./img/video-bg.png')">
    <div class="container">

        <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
                <img src="./img/video-banner.jpg" width="970" height="550" loading="lazy" alt="video banner"
                    class="img-cover">

                <button class="play-btn" aria-label="play video">
                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <img src="./img/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
                class="shape video-shape-1">

            <img src="./img/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
                class="shape video-shape-2">

        </div>

    </div>
</section>





<!-- 
        - #STATE
      -->

<section class="section stats" aria-label="stats">
    <div class="container">

        <ul class="grid-list">

            <li>
                <div class="stats-card" style="--color: 170, 75%, 41%">
                    <h3 class="card-title">29.3k</h3>

                    <p class="card-text">Student Enrolled</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 351, 83%, 61%">
                    <h3 class="card-title">32.4K</h3>

                    <p class="card-text">Class Completed</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 260, 100%, 67%">
                    <h3 class="card-title">100%</h3>

                    <p class="card-text">Satisfaction Rate</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 42, 94%, 55%">
                    <h3 class="card-title">354+</h3>

                    <p class="card-text">Top Instructors</p>
                </div>
            </li>

        </ul>

    </div>
</section>





<!-- 
        - #BLOG
      -->

<section class="section blog has-bg-image" id="blog" aria-label="blog"
    style="background-image: url('./img/blog-bg.svg')">
    <div class="container">

        <p class="section-subtitle">Latest Articles</p>

        <h2 class="h2 section-title">Get News With Eduweb</h2>

        <ul class="grid-list">

            <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                        <img src="./img/blog-1.jpg" width="370" height="370" loading="lazy"
                            alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content">

                        <a href="#" class="card-btn" aria-label="read more">
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                        <a href="#" class="card-subtitle">Online</a>

                        <h3 class="h3">
                            <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                        </h3>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Oct 10, 2021</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Com 09</span>
                            </li>

                        </ul>

                        <p class="card-text">
                            Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.
                        </p>

                    </div>

                </div>
            </li>

            <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                        <img src="./img/blog-2.jpg" width="370" height="370" loading="lazy"
                            alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content">

                        <a href="#" class="card-btn" aria-label="read more">
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                        <a href="#" class="card-subtitle">Online</a>

                        <h3 class="h3">
                            <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                        </h3>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Oct 10, 2021</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Com 09</span>
                            </li>

                        </ul>

                        <p class="card-text">
                            Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.
                        </p>

                    </div>

                </div>
            </li>

            <li>
                <div class="blog-card">

                    <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                        <img src="./img/blog-3.jpg" width="370" height="370" loading="lazy"
                            alt="Become A Better Blogger: Content Planning" class="img-cover">
                    </figure>

                    <div class="card-content">

                        <a href="#" class="card-btn" aria-label="read more">
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                        <a href="#" class="card-subtitle">Online</a>

                        <h3 class="h3">
                            <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                        </h3>

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Oct 10, 2021</span>
                            </li>

                            <li class="card-meta-item">
                                <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                                <span class="span">Com 09</span>
                            </li>

                        </ul>

                        <p class="card-text">
                            Lorem Ipsum Dolor Sit Amet Cons Tetur Adipisicing Sed.
                        </p>

                    </div>

                </div>
            </li>

        </ul>

        <img src="./img/blog-shape.png" width="186" height="186" loading="lazy" alt="" class="shape blog-shape">

    </div>
</section>



<!-- 
    - #BACK TO TOP
  -->

<a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>


@endsection