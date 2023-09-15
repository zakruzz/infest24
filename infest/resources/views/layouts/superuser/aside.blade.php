<aside id="side-overlay">
    <div class="content-header">
        <a class="img-link me-2" href="#">
            <img class="img-avatar img-avatar32" src="{{ auth()->user()->getImageUrl() }}" alt="">
        </a>
        <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="#">
            {{ auth()->user()->name }}
        </a>
        <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
        </button>
    </div>
    <div class="content-side">
        <div class="block pull-x">
            <div class="block-header bg-body-light">
                <h3 class="block-title">
                    <i class="fa fa-fw fa-users opacity-50 me-1"></i> Admin
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                <ul class="nav-users">
                    @foreach(\App\Models\Auth\User::all() as $result)
                        <li>
                            <a href="#">
                                <img class="img-avatar" src="{{ $result->getImageUrl() }}" alt="">
                                <i class="fa fa-circle text-secondary"></i>
                                <div class="text-truncate">{{ $result->name }}</div>
                                <div class="fw-normal fs-xs text-muted">offline</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>
