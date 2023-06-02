<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item pb-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span data-feather="edit"></span>
                                Input Data
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <a class="nav-link {{ Request::is('dashboard/posts/wilayah') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/wilayah">
                                    <span data-feather="home"></span>
                                    Wilayah
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/provinsi') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/provinsi">
                                    <span data-feather="home"></span>
                                    Provinsi
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/kecamatan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/kecamatan">
                                    <span data-feather="home"></span>
                                    Kecamatan
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/kab-kota') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/kab-kota">
                                    <span data-feather="home"></span>
                                    Kab/Kota
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/desa') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/desa">
                                    <span data-feather="home"></span>
                                    Desa
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/unit-kerja') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/unit-kerja">
                                    <span data-feather="home"></span>
                                    Unit Kerja
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/jabatan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/jabatan">
                                    <span data-feather="home"></span>
                                    Jabatan
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/golongan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/golongan">
                                    <span data-feather="home"></span>
                                    Golongan
                                </a>

                                {{-- <a class="nav-link {{ Request::is('dashboard/posts/jenkel') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts/jenkel">
                    <span data-feather="home"></span>
                    Jenis kelamin
                  </a>
                  
                  <a class="nav-link {{ Request::is('dashboard/posts/status') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts/status">
                    <span data-feather="home"></span>
                    Status
                  </a> --}}

                                <a class="nav-link {{ Request::is('dashboard/posts/jenis-pelatihan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/jenis-pelatihan">
                                    <span data-feather="home"></span>
                                    Jenis Pelatihan
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/modul') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/modul">
                                    <span data-feather="home"></span>
                                    Modul
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/peserta') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/peserta">
                                    <span data-feather="home"></span>
                                    Peserta
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/sertifikat') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/sertifikat">
                                    <span data-feather="home"></span>
                                    Sertifikat
                                </a>



                                <a class="nav-link {{ Request::is('dashboard/posts/pengajar') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/pengajar">
                                    <span data-feather="home"></span>
                                    Pengajar
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/pelaksanaan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/pelaksanaan">
                                    <span data-feather="home"></span>
                                    Pelaksanaan
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/detail-pelatihan') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/detail-pelatihan">
                                    <span data-feather="home"></span>
                                    Detail Pelatihan
                                </a>

                                <a class="nav-link {{ Request::is('dashboard/posts/rekaptulasi') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/posts/rekaptulasi ">
                                    <span data-feather="home"></span>
                                    Rekaptulasi
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</nav>
