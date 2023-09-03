@section('title', 'Buat Janji Temu dengan ' . $doctor->name . ' -')

@section('meta_keywords', 'Buat janji temu dokter surabaya, booking klinik surabaya, klinik surabaya')

@section('styles')
    @livewireStyles
@endsection

<div>

    <div class="loader d-none" wire:loading.class.remove="d-none">
        <div class="loader-circle-2"></div>
    </div>

    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('appointment.index') }}">Buat Janji Temu Dokter</a>
                    <span>{{ $doctor->name }}</span>
                </div>
            </div>
        </div>
    </div>

    @if($currentStep != $firstStep)
        <div class="section mt-5">
            <div class="container">
                <ul class="list-unstyled multi-steps">
                    <li class="{{$currentStep == 1 ? 'step-active' : ''}}">Jadwal</li>
                    <li class="{{$currentStep == 2 ? 'step-active' : ''}}">Formulir</li>
                    <li class="{{$currentStep == 3 ? 'step-active' : ''}}">Konfirmasi</li>
                    <li class="{{$currentStep == 4 ? 'step-active' : ''}}">Selesai</li>
                </ul>
            </div>
        </div>
    @endif

    <div class="section page-content-first mb-8">
        <div class="container mt-6">

            @include('sections.form.main.appointment.step-1')
            @include('sections.form.main.appointment.step-2')
            @include('sections.form.main.appointment.step-3')
            @include('sections.form.main.appointment.step-4')

        </div>
    </div>
</div>

@section('scripts')
    @livewireScripts
    @include('packages.js.livewire-alert')

    <script type="text/javascript">
        $(document).ready(function(){
            $(window).on('beforeunload', function(){
                return 'Are you sure you want to leave?';
            });
        });
    </script>
@endsection
