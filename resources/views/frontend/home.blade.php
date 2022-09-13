@extends('layouts.main')
@section('container')
    {{-- Bagian HOME --}}
    <div class="container" id="home">
        <div class="text-side" data-aos="fade-right">
            <div class="title">
                <h1>Sekolah Dasar IT An-Nahar </h1>
            </div>
            <div class="details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam harum maiores
                    praesentium nisi, officia sint magnam consequuntur nemo eius libero ratione officiis.</p>
            </div>
            <div class="buttons">
                <a href="/daftarsiswa">Daftar</a>
                <a href="/tentangsekolah">Pelajari</a>
            </div>
        </div>
        <div class="image-side" data-aos="fade-left">
            <img src="img/logo.png" alt="home-img">
        </div>
    </div>

    {{-- END HOME --}}

    {{-- Bagian Program Sekolah --}}
    <div class="container" id="services">
        <div class="image-side" data-aos="fade-right">
            <img src="img/about.svg" alt="services">
        </div>
        <div class="text-side" data-aos="fade-right" data-aos-delay="600">
            <div class="title">
                <h1>Tentang Sekolah</h1>
            </div>
            <div class="details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam harum maiores
                    praesentium nisi, officia sint magnam consequuntur nemo eius libero ratione officiis.</p>
            </div>
            <div class="buttons">
                <a href="#">Explore</a>
            </div>
        </div>
    </div>
    {{-- Akhir Bagian Program Sekolah --}}

    {{-- Bagian Program Ekstrakulikuler --}}
    <div class="container" id="pricing">
        <div class="text-side" data-aos="fade-left" data-aos-delay="600">
            <div class="title">
                <h1>Program Sekolah</h1>
            </div>
            <div class="details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam harum maiores
                    praesentium nisi, officia sint magnam consequuntur nemo eius libero ratione officiis.</p>
            </div>
            <div class="buttons">
                <a href="/tentangsekolah">Pelajari</a>
            </div>
        </div>
        <div class="image-side" data-aos="fade-left">
            <img src="img/bola.svg" alt="home-img">
        </div>
    </div>
    {{-- Akhir Program Ekstrakulikuler --}}

    {{-- Bagian Kontak --}}
    <div class="container" id="services">
        <div class="image-side" data-aos="fade-right">
            <img src="img/kontak1.jpg" alt="services">
        </div>
        <div class="text-side" data-aos="fade-right" data-aos-delay="600">
            <div class="title">
                <h1>Punya Pertanyaan ? <br> Hubungi Kami </h1>
            </div>
            <div class="details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam harum maiores
                    praesentium nisi, officia sint magnam consequuntur nemo eius libero ratione officiis.</p>
            </div>
            <div class="buttons">
                <a href="/kontak">Kontak Kami</a>
            </div>
        </div>
    </div>
    {{-- Akhir Bagian Kontak --}}

    <!-- scroll top button -->
    <a href="#top" class="scroll-top-btn">
        <span>
            <box-icon name='chevron-up' type='solid' color='#fffefe'></box-icon>
        </span>
    </a>
@endsection
