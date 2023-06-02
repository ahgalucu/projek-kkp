<!-- Header
  ============================================= -->
  <header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo" data-dark-logo="{{ url('/img/kemendagri_logo.png') }}"
                        data-mobile-logo="{{ url('/img/kemendagri_logo.png') }}"><img
                            src="{{ url('/img/kemendagri_logo.png') }}" alt="Kemendagri Logo"></a>
                    <a href="/" class="retina-logo" data-dark-logo="{{ url('/img/kemendagri_logo.png') }}"
                        data-mobile-logo="{{ url('/img/kemendagri_logo.png') }}"><img
                            src="{{ url('/img/kemendagri_logo.png') }}" alt="Kemendagri Logo"></a>
                </div>
                <!-- #logo end -->



                <!-- Primary Navigation
      ============================================= -->
                <nav class="primary-menu on-click">

                    <ul class="menu-container">
                        <li class="menu-item"><a class="menu-link" href="#">
                                <div>Informasi Peserta</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('guest/tot') ? 'active' : '' }}" href="/guest/tot">
                                        <div><i class="icon-magic"></i>TOT</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('guest/pad') ? 'active' : '' }}" href="/guest/pad">
                                        <div><i class="icon-link"></i>PAD</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('guest/totm') ? 'active' : '' }}" href="/guest/totm">
                                        <div><i class="icon-heart3"></i>TOTM</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class="menu-link nav-link {{ Request::is('guest/evaluasi') ? 'active' : '' }}" href="/guest/evaluasi">
                                        <div><i class="icon-bar-chart"></i>Evaluasi</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
<!-- #header end -->
