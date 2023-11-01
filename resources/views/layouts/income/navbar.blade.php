<header id="page-header">
    <div class="content-header">
        <div class="space-x-1">
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="space-x-1">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block fw-semibold">{{ auth()->user()->name }}</span>
                    <i class="fa fa-angle-down opacity-50 ms-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="px-2 py-3 bg-body-light rounded-top">
                        <h5 class="h6 text-center mb-0">
                            {{ auth()->user()->name }}
                        </h5>
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="#">
                            <span>Profil Saya</span>
                            <i class="fa fa-fw fa-user opacity-25"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="{{ route('logout') }}">
                            <span>Sign Out</span>
                            <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-sm btn-alt-secondary">
                <i class="fa fa-fw fa-{{auth()->user()->is_darkmode ? 'lightbulb' : 'moon'}}"></i>
            </a>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
{{--                    <span class="text-primary">&bull;</span>--}}
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications">
                    <div class="px-2 py-3 bg-body-light rounded-top">
                        <h5 class="h6 text-center mb-0">
                            Notifikasi
                        </h5>
                    </div>
                    <ul class="nav-items my-2 fs-sm">
{{--                        <li>--}}
{{--                            <a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
{{--                                <div class="flex-shrink-0 me-2 ms-3">--}}
{{--                                    <i class="fa fa-fw fa-check text-success"></i>--}}
{{--                                </div>--}}
{{--                                <div class="flex-grow-1 pe-2">--}}
{{--                                    <p class="fw-medium mb-1">You’ve upgraded to a VIP account successfully!</p>--}}
{{--                                    <div class="text-muted">15 min ago</div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <div class="d-flex justify-content-center p-2">
                                <span class="text-center">Belum ada notifikasi</span>
                            </div>
                        </li>
                    </ul>
                    <div class="p-2 bg-body-light rounded-bottom">
                        <a class="dropdown-item text-center mb-0" href="#">
                            <i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-fw fa-stream"></i>
            </button>
        </div>
    </div>
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="far fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
</header>
