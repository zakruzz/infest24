<div class="row">
    <div class="col-lg-4 mb-3">
        <a href="{{ route('inskill.pendaftar.export') }}" class="btn btn-success w-50">Export Excel</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterPembayaran.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        <select class="form-select w-100" wire:model="filterPembayaran.order">
            <option value="DESC">Urutkan dari Terbaru</option>
            <option value="ASC">Urutkan dari Terlama</option>
        </select>
    </div>

    @if($this->filterPembayaran)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetfilterPembayaran">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th class="text-center w-15">Nama Tim</th>
            <th class="text-center w-15">Ketua Tim</th>
            <th class="text-center w-10">No WhatsApp</th>
            <th class="text-center w-15">Asal Institusi</th>
            <th class="text-center w-15">Bukti Pembayaran</th>
            <th class="text-center w-15">Status</th>
        </tr>
        </thead>
        <tbody>

        @if($generals->count() == 0)
            <tr>
                <td class="text-center" colspan="6">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($generals as $key => $pendaftar)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $pendaftar->user->name !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! json_decode($pendaftar->name)[0] !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $pendaftar->no_wa !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $pendaftar->institusi !!}</span>
                </td>
                <td class="fw-semibold text-center">
                    <span>
                        @if (!$pendaftar->pembayaran)
                            No Data
                        @else
                            <button class="btn btn-large btn-success" onclick="checkPembayaran('{{ asset('storage/pembayaran/' . $pendaftar->pembayaran->filename) }}')">
                                <i class="fa fa-file"></i>
                            </button>
                        @endif
                    </span>
                </td>
                <td class="fw-semibold text-center">
                    <span>
                        @if (!$pendaftar->pembayaran)
                            No Data
                        @else
                            <button wire:click=""  class="btn btn-large btn-success">
                                Setujui <i class="fa fa-check"></i>
                            </button>
                        @endif
                    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $generals->links('components.pagination') }}
</div>

<script>
    function checkPembayaran($link) {
        window.location.href = $link;
    }
</script>