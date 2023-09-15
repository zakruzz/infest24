@section('title', 'Daftar Projek')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">Daftar Projek</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <span class="breadcrumb-item active">Projek</span>
        </nav>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Tabel <small>Daftar Projek</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            @include('sections.table.superuser.project')
        </div>
    </div>
    <a href="{{ route('superuser.project.create') }}" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
