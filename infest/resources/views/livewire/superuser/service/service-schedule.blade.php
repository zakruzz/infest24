@section('title', 'Jadwal Praktek')
@section('styles')
    @include('packages.css.form-plugins')
@endsection
<div>

    @include('sections.modal.superuser.service-schedule')

    <div class="content-heading pt-0">
        <h3 class="mb-0">Jadwal Praktek</h3>
        <nav class="breadcrumb push mb-0">
            <a class="breadcrumb-item" href="{{route('superuser.dashboard')}}">Beranda</a>
            <a class="breadcrumb-item" href="{{route('superuser.service.index')}}">Layanan Kesehatan</a>
            <span class="breadcrumb-item active">Jadwal</span>
        </nav>
    </div>

    @foreach($schedules as $schedule)
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $schedule['day'] }}</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content block-content-full">
                @include('sections.table.superuser.service-schedule')
            </div>
        </div>
    @endforeach

    <a wire:click="create" href="javascript:void(0)" class="btn-float">
        <i class="fa fa-plus btn-float-inner"></i>
    </a>
</div>
@section('scripts')
    @include('packages.js.form-plugins')
@endsection
