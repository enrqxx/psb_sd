{{-- NavBar --}}

<header class="header" data-header>
    <div class="container">

        <a href="/" class="logo">
            <img src="{{ asset('/img/logoAN.png') }}" width="162" height="50" alt="EduWeb logo">
        </a>

        <nav class="navbar" data-navbar>

            <div class="wrapper">
                <a href="#" class="logo">
                    <img src="{{ asset('/img/logoAN.png') }}" width="162" height="50" alt="EduWeb logo">
                </a>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="/" class="navbar-link" data-nav-link>Beranda</a>
                </li>

                <li class="navbar-item">
                    <a href="/tentangsekolah" class="navbar-link" data-nav-link>Tentang Kami</a>
                </li>

                <li class="navbar-item">
                    <a href="/sKeterima" class="navbar-link" data-nav-link>Daftar Siswa</a>
                </li>

                <li class="navbar-item">
                    <a href="/kontak" class="navbar-link" data-nav-link>Kontak</a>
                </li>

                <li class="navbar-item">
                    <a href="/pendaftaran" class="navbar-link" data-nav-link>Pendaftaran</a>
                </li>

            </ul>

        </nav>

        <div class="header-actions">
            <a href="/pendaftaran" class="btn has-before">
                <span class="span">Daftar</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

            <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>

{{-- End Navbar --}}