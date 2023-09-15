@section('title', 'Konfigurasi Website')
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">Konfigurasi Website</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Informasi Website</span>
        </nav>
    </div>

    <div class="block block-rounded" wire:loading.class="block-mode-loading">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-globe me-1 text-muted"></i> Informasi Website
            </h3>
        </div>
        <div class="block-content">
            @include('sections.form.superuser.configuration')
        </div>
    </div>

</div>
