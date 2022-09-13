<div class="header">
    <div class="navbar">
        <div class="logo">
            <a href="/">AN-NAHAR</a>
        </div>
        <ul class="menu-items">
            <li>
                <a href="/">Beranda</a>
            </li>
            <li>
                <a href="/tentangsekolah">Program Sekolah</a>
            </li>
            <li><a href="/kontak">Kontak</a></li>
            @if ($tampil == 1)
                <li><a href="/sKeterima">List Siswa Baru</a></li>
            @else
            @endif
            {{-- @if ($status == 1) --}}
            <li class="kontak-btn">
                <a href="/daftarsiswa">Daftar</a>
            </li>
            {{-- @else
                <li class="kontak-btn">
                    <a href="/daftar-nonaktif">Daftar</a>
                </li>
            @endif --}}
            @if (Route::has('login'))
                <li class="kontak-btn">
                    @auth
                        <a href="{{ url('/admin/home') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" target="_blank"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                    @endauth
                </li>
            @else
                <li class="kontak-btn">
                    <a href="{{ route('login') }}" target="_blank"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                </li>
            @endif
        </ul>
    </div>
</div>

<div class="nav-toggler">
    <div class="toggle-bar"></div>
</div>
