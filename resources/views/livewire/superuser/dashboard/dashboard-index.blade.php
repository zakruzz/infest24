@section('title', 'Beranda')
<div>

    <div wire:poll.2s class="row">
        <div class="col-lg-8">
            <div class="block block-rounded bg-gd-primary text-white">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <h2 class="fw-bold mb-2">
                            {{ greeting_text() }} {{ auth()->user()->name }}
                        </h2>
                        <h3 class="fs-base fw-medium text-white mb-0">
                            Have a nice day !!
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-2 text-center">
                        <h1 class="fw-bold mb-3">
                            {{\Carbon\Carbon::now()->format("H:i")}}
                        </h1>
                        <h4 class="fs-base fw-medium text-muted mb-0">
                            {{\Carbon\Carbon::now()->format("d M Y")}}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <h2 class="content-heading pt-0">Pintasan</h2>
        </div>
        <div class="row">
            <div class="col">
                <a class="block block-rounded block-link-shadow" href="{{ route('home') }}" target="_blank">
                    <div class="block-content block-content-full text-center">
                        <div class="p-3 mb-1">
                            <i class="fa fa-3x fa-globe text-earth"></i>
                        </div>
                        <p class="fs-sm fw-medium text-muted mb-0">
                            Lihat
                        </p>
                        <p class="fs-lg fw-semibold mb-0">
                            Beranda
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script src="{{asset('assets/app/js/pages/be_pages_dashboard.min.js')}}"></script>
@endsection
