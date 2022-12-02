@extends('layouts.main')
@section('container')

<section class="section hero has-bg-image" id="home" aria-label="home"
    style="background-image: url('./img/hero-bg.svg')">
    <div class="container">

        <div class="about-content">

            <p class="section-subtitle">Kontak Sekolah Dasar SDIT An-Nahar</p>


            <ul class="about-list">
                <p class="section-text"><i class="uil uil-map-marker-alt"></i>Alamat Lengkap SDIT An-Nahar</p>
                <li class="about-item">
                    <span class="span">Desa Margacinta, Kecamatan Cijulang, Kabupaten Pangandaran, RT 05 RW 02</span>
                </li>



        </div>


        <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15815.058089438153!2d108.4913233!3d-7.7083986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca212cca70b16d63!2sSDIT%20AN-NAHAR%20PANGANDARAN!5e0!3m2!1sid!2sid!4v1669895671839!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <img src="./img/nomer-telp.svg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./img/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
                class="shape about-shape-3">

        </figure>

    </div>
</section>




@endsection