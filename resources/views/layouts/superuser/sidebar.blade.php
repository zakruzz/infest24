<nav id="sidebar">
    <div class="sidebar-content">
        <div class="content-header justify-content-lg-center">
            <div>
                <span class="smini-visible fw-bold tracking-wide fs-lg">
                  i<span class="text-primary">k</span>
                </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ route('superuser.dashboard') }}">
                  <span class="smini-hidden">
                    <span class="fs-4 text-body-color">admin</span><span class="fs-4">panel</span>
                  </span>
                </a>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
            </div>
        </div>
        <div class="js-sidebar-scroll">
            <div class="content-side content-side-user px-0 py-0">
                <div class="smini-visible-block animated fadeIn px-3">
                    <img class="img-avatar img-avatar32" src="{{ auth()->user()->getImageUrl() }}" alt="">
                </div>
                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="#">
                        <img class="img-avatar" src="{{ auth()->user()->getImageUrl() }}" alt="">
                    </a>
                    <ul class="list-inline mt-1 mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold" href="#">
                                {{ auth()->user()->name }} <br> <small class="text-uppercase fs-xs">{{ auth()->user()->type }}</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('superuser/beranda') ? 'active' : ''}}"
                           href="{{ route('superuser.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Konten Website</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->is('superuser/slider') || request()->is('superuser/slider/*')) ? 'active' : '' }}"
                           href="{{ route('superuser.slider') }}">
                            <i class="nav-main-link-icon fa fa-images"></i>
                            <span class="nav-main-link-name">Slider</span>
                        </a>
                    </li>
                    <li class="nav-main-item {{ (request()->is('superuser/berita') || request()->is('superuser/berita/*')) ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                           aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-newspaper"></i>
                            <span class="nav-main-link-name">Berita</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/berita') || request()->is('superuser/berita/*') && !request()->is('superuser/berita/komentar')) ? 'active' : '' }}"
                                   href="{{ route('superuser.blog.index') }}">
                                    <span class="nav-main-link-name">Daftar Berita</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->is('superuser/berita/komentar') ? 'active' : '' }}"
                                   href="{{ route('superuser.blog.comments') }}">
                                    <span class="nav-main-link-name">Komentar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item {{ (request()->is('superuser/event') || request()->is('superuser/event/*')) ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                           aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-calendar"></i>
                            <span class="nav-main-link-name">Event</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/event') || request()->is('superuser/event/event')) ? 'active' : '' }}"
                                   href="{{ route('superuser.event.index') }}">
                                    <span class="nav-main-link-name">Daftar Event</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/event') || request()->is('superuser/event/subevent')) ? 'active' : '' }}"
                                   href="{{ route('superuser.subevent.index') }}">
                                    <span class="nav-main-link-name">Daftar Subevent</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/event') || request()->is('superuser/event/timeline')) ? 'active' : '' }}"
                                   href="{{ route('superuser.timeline.index') }}">
                                    <span class="nav-main-link-name">Timeline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->is('superuser/faq') || request()->is('superuser/faq/*')) ? 'active' : '' }}"
                           href="{{ route('superuser.faq.index') }}">
                            <i class="nav-main-link-icon fa fa-comment"></i>
                            <span class="nav-main-link-name">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Event</li>
                    <li class="nav-main-item {{ (request()->is('superuser/odl') || request()->is('superuser/odl/*')) ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                           aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-calendar"></i>
                            <span class="nav-main-link-name">ODL</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/event') || request()->is('superuser/odl/odl_umum')) ? 'active' : '' }}"
                                   href="{{ route('superuser.odl_umum.index') }}">
                                    <span class="nav-main-link-name">Peserta Umum</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ (request()->is('superuser/event') || request()->is('superuser/odl/odl_undangan')) ? 'active' : '' }}"
                                   href="{{ route('superuser.odl_undangan.index') }}">
                                    <span class="nav-main-link-name">Peserta Undangan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Lainnya</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->is('superuser/admin') || request()->is('superuser/admin/*')) ? 'active' : '' }}"
                           href="{{ route('superuser.admin') }}">
                            <i class="nav-main-link-icon fa fa-user-nurse"></i>
                            <span class="nav-main-link-name">Akun Admin</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->is('superuser/statistik/pengunjung') || request()->is('superuser/statistik/pengunjung/*')) ? 'active' : '' }}"
                           href="{{ route('superuser.statistics.visitor') }}">
                            <i class="nav-main-link-icon fa fa-chart-line"></i>
                            <span class="nav-main-link-name">Statistik Pengunjung</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ (request()->is('superuser/konfigurasi') || request()->is('superuser/konfigurasi/*')) ? 'active' : '' }}"
                           href="{{ route('superuser.configuration') }}">
                            <i class="nav-main-link-icon fa fa-globe"></i>
                            <span class="nav-main-link-name">Konfigurasi Website</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
