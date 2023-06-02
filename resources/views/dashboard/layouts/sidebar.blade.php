<!-- Header
  ============================================= -->
<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo">
                    <a href="/dashboard" class="standard-logo" data-dark-logo="{{ url('/img/kemendagri_logo.png') }}"
                        data-mobile-logo="{{ url('/img/kemendagri_logo.png') }}"><img
                            src="{{ url('/img/kemendagri_logo.png') }}" alt="Kemendagri Logo"></a>
                    <a href="/dashboard" class="retina-logo" data-dark-logo="{{ url('/img/kemendagri_logo.png') }}"
                        data-mobile-logo="{{ url('/img/kemendagri_logo.png') }}"><img
                            src="{{ url('/img/kemendagri_logo.png') }}" alt="Kemendagri Logo"></a>
                </div>
                <!-- #logo end -->



                <!-- Primary Navigation
      ============================================= -->
                <nav class="primary-menu on-click">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                                aria-current="page" href="/dashboard">
                                <div>Dashboard</div>
                            </a>
                        </li>

                        <li class="menu-item"><a class="menu-link" href="#">
                                <div>Input Data</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Data master</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/provinsi') ? 'active' : '' }}"
                                                href="/dashboard/posts/provinsi">
                                                <div>Provinsi</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/kab-kota') ? 'active' : '' }}"
                                                href="/dashboard/posts/kab-kota">
                                                <div>Kab/Kota</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/kecamatan') ? 'active' : '' }}"
                                                href="/dashboard/posts/kecamatan">
                                                <div>Kecamatan</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/desa') ? 'active' : '' }}"
                                                href="/dashboard/posts/desa">
                                                <div>Desa</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/jenis-pelatihan') ? 'active' : '' }}"
                                                href="/dashboard/posts/jenis-pelatihan">
                                                <div>Jenis Pelatihan</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/jabatan') ? 'active' : '' }}"
                                                href="/dashboard/posts/jabatan">
                                                <div>Jabatan</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/golongan') ? 'active' : '' }}"
                                                href="/dashboard/posts/golongan">
                                                <div>Golongan</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/wilayah') ? 'active' : '' }}"
                                                href="/dashboard/posts/wilayah">
                                                <div>Wilayah</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/unit-kerja') ? 'active' : '' }}"
                                                href="/dashboard/posts/unit-kerja">
                                                <div>Unit Kerja</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/pengajar') ? 'active' : '' }}"
                                                href="/dashboard/posts/pengajar">
                                                <div>Pengajar</div>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Data Transaksi</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/tot') ? 'active' : '' }}" href="/dashboard/posts/tot">
                                                <div>Data TOT</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/pad') ? 'active' : '' }}" href="/dashboard/posts/pad">
                                                <div>Data PAD</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/totm') ? 'active' : '' }}" href="/dashboard/posts/totm">
                                                <div>Data TOTM</div>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a class="menu-link nav-link {{ Request::is('dashboard/posts/evaluasi') ? 'active' : '' }}" href="/dashboard/posts/evaluasi">
                                                <div>Evaluasi</div>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item"><a class="menu-link" href="#">
                                <div>Laporan</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('dashboard/posts/tot-data') ? 'active' : '' }}" href="/dashboard/posts/tot-data">
                                        <div><i class="icon-magic"></i>TOT</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('dashboard/posts/pad-data') ? 'active' : '' }}" href="/dashboard/posts/pad-data">
                                        <div><i class="icon-link"></i>PAD</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('dashboard/posts/totm-data') ? 'active' : '' }}" href="/dashboard/posts/totm-data">
                                        <div><i class="icon-heart3"></i>TOTM</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('dashboard/posts/evaluasi-data') ? 'active' : '' }}" href="/dashboard/posts/evaluasi-data">
                                        <div><i class="icon-bar-chart"></i>Evaluasi</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item pt-5">
                            <a class="menu-link" href="index.html">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link px-3 bg-warning border-0">Logout <span
                                            data-feather="log-out"></span></button>
                                </form>
                            </a>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
<!-- #header end -->
