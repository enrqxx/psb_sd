@extends('layouts.main')
@section('container')





{{-- KONTEN PERTAMA --}}

<section class="section hero has-bg-image" id="home" aria-label="home"
    style="background-image: url('{{ asset('/img/hero-bg.svg') }}')">
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

        <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
                <img src="{{ asset('/img/sekolah.jpg') }}" width="520" height="370" loading="lazy" alt="about banner"
                    class="img-cover">
            </div>

            <img src="{{ '/img/about-shape-1.svg' }}" width="360" height="420" loading="lazy" alt=""
                class="shape about-shape-1">

            <img src="{{ asset('/img/about-shape-2.svg') }}" width="371" height="220" loading="lazy" alt=""
                class="shape about-shape-2">

            <img src="{{ asset('/img/about-shape-3.png') }}" width="722" height="528" loading="lazy" alt=""
                class="shape about-shape-3">

        </figure>

    </div>
</section>



{{-- HALAMAN ABOUT --}}




<section class="section about" id="about" aria-label="about">
    <div class="container">

        <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
                <img src="{{ asset('/img/anakdidik.jpg') }}" width="270" height="300" alt="hero banner"
                    class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
                <img src="{{ asset('/img/solat.jpg') }}" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="{{ asset('/img/hero-shape-2.png') }}" width="622" height="551" alt="" class="shape hero-shape-2">

        </figure>

        <div class="about-content">


            <h2 class="h2 section-title">
                SD IT <span class="span">AN-NAHAR</span> memiliki <span class="span">VISI</span> Seperti Berikut:
            </h2>

            <p class="section-text">
                Menjadi Sekolah yang Mendidik Siswa Qur’ani, Berakhlaq yang Benar, Beraqidah yang Saleh, Berilmu
                Pengetahuan Kuat dan Menjadi Generasi yang Mandiri.

            </p>

            <img src="{{ asset('/img/about-shape-4.svg') }}" width="100" height="100" loading="lazy" alt=""
                class="shape about-shape-4">

        </div>

        <div class="about-content">


            <h2 class="h2 section-title">
                SD IT <span class="span">AN-NAHAR</span> Memiliki <span class="span">MISI</span> Seperti Berikut:
            </h2>

            <p class="section-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>

            <ul class="about-list">

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Menyediakan Sekolah Unggul Dengan SDM, Sarana dan Prasarana yang
                        Berkualitas.</span>
                </li>

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Mengelola Sekolah yang Unggul dalam Ilmu Pengetahuan dan Teknologi dengan
                        Multimedia dan Multimetode.</span>
                </li>

                <li class="about-item">
                    <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Mendidik dan Meluluskan Siswa dengan Keunggulan dan Kepribadian Islami
                        Kemandirian, Keterampilan Serta Keilmuan.</span>
                </li>

            </ul>

            <img src="{{ asset('/img/about-shape-4.svg') }}" width="100" height="100" loading="lazy" alt=""
                class="shape about-shape-4">

        </div>

        <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
                <img src="{{ asset('/img/ruangkelas.jpg') }}" width="270" height="300" alt="hero banner"
                    class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
                <img src="{{ asset('/img/multimedia.jpg') }}" width="240" height="370" alt="hero banner"
                    class="img-cover">
            </div>

            <img src="{{ asset('/img/hero-shape-2.png') }}" width="622" height="551" alt="" class="shape hero-shape-2">

        </figure>

    </div>


</section>



{{-- KATEGORI --}}


<section class="section course" id="courses" aria-label="course">
    <div class="container">

        <h2 class="h2 section-title">FASILITAS SEKOLAH</h2>

        <ul class="grid-list">

            <li>
                <div class="category-card" style="--color: 170, 75%, 41%">

                    <div class="card-icon">
                        <img src="./img/wind.svg" width="40" height="40" loading="lazy" alt="Online Degree Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Ruangan Kelas Ber-AC</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 351, 83%, 61%">

                    <div class="card-icon">
                        <img src="./img/football.svg" width="40" height="40" loading="lazy" alt="Non-Degree Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Lapangan Luas</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 229, 75%, 58%">

                    <div class="card-icon">
                        <img src="./img/building.svg" width="40" height="40" loading="lazy" alt="Off-Campus Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Multifunctional Hall</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 42, 94%, 55%">

                    <div class="card-icon">
                        <img src="./img/mosque.svg" width="40" height="40" loading="lazy" alt="Hybrid Distance Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Masjid</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 170, 75%, 41%">

                    <div class="card-icon">
                        <img src="./img/uks.svg" width="40" height="40" loading="lazy" alt="Online Degree Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Ruang UKS</span>

                </div>
            </li>

            <li>
                <div class="category-card" style="--color: 351, 83%, 61%">

                    <div class="card-icon">
                        <img src="./img/bus.svg" width="40" height="40" loading="lazy" alt="Non-Degree Programs"
                            class="img">
                    </div>

                    <span class="card-badge">Antar Jemput Sekolah</span>

                </div>
            </li>

        </ul>
    </div>
</section>





{{-- VIDEO --}}





<section class="video has-bg-image" aria-label="video" style="background-image: url('./img/video-bg.png')">
    <div class="container">

        <div class="video-card">
            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
                <x-embed url="https://www.youtube.com/watch?v=eWr4bOCzvcY" />
            </div>

            <img src="{{ asset('/img/video-shape-1.png') }}" width="1089" height="605" loading="lazy" alt=""
                class="shape video-shape-1">

            <img src="{{ asset('/img/video-shape-2.png') }}" width="158" height="174" loading="lazy" alt=""
                class="shape video-shape-2">

        </div>

    </div>
</section>




{{-- STATUS --}}




<section class="section stats" aria-label="stats">
    <div class="container">

        <ul class="grid-list">

            <li>
                <div class="stats-card" style="--color: 170, 75%, 41%">
                    <h3 class="card-title">123K</h3>

                    <p class="card-text">Siswa</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 351, 83%, 61%">
                    <h3 class="card-title">100+</h3>

                    <p class="card-text">Menghafal Al-Qur'an</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 260, 100%, 67%">
                    <h3 class="card-title">100%</h3>

                    <p class="card-text">Kepuasan</p>
                </div>
            </li>

            <li>
                <div class="stats-card" style="--color: 42, 94%, 55%">
                    <h3 class="card-title">354+</h3>

                    <p class="card-text">Guru</p>
                </div>
            </li>

        </ul>

    </div>
</section>

@endsection