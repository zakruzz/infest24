@section('title', $editMode ? 'Sunting Timeline' : 'Tambah Timeline')
@section('styles')
    @include('packages.css.form-plugins')
    @include('packages.js.ckeditor5-classic')
@endsection
<div>
    <div class="content-heading pt-0">
        <h3 class="mb-0">{{ $editMode ? 'Sunting' : 'Tambah' }} Timeline</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <a class="breadcrumb-item" href="{{route('superuser.timeline.index')}}">Timeline</a>
            <span class="breadcrumb-item active">{{ $editMode ? 'Sunting' : 'Tambah' }}</span>
        </nav>
    </div>

    <div class="block block-rounded" wire:loading.class="block-mode-loading">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Form <small>Timeline</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <span>Bidang wajib diisi (<span class="text-danger">*</span>)</span>
            <form wire:submit.prevent="save">
                @include('sections.form.superuser.timeline')
                <button type="submit" class="btn btn-primary w-100">Submit Data</button>
            </form>
        </div>
    </div>

</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
