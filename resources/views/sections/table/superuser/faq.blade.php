<div class="row">
    <div class="col-lg-8 mb-3">
        <input type="search" class="form-control w-100" wire:model="filterFaq.query"
               placeholder="Cari Data..." required>
    </div>
    <div class="col-lg-4 mb-3">
        <select class="form-select w-100" wire:model="filterFaq.order">
            <option value="DESC">Urutkan dari Terbaru</option>
            <option value="ASC">Urutkan dari Terlama</option>
        </select>
    </div>

    @if($this->filterFaq)
        <div class="col-lg-12 mb-3">
            <button type="button" class="btn btn-alt-primary w-100" wire:click="resetFilterFaq">Reset Filter</button>
        </div>
    @endif
</div>
<div class="overflow-auto">
    <table class="table table-bordered table-hover table-striped table-vcenter table-responsive" wire:loading.class="table-mode-loading">
        <thead>
        <tr>
            <th class="text-center w-10">No.</th>
            <th>Nama Subevent</th>
            <th class="text-center w-15">Question</th>
            <th class="text-center w-15">Answer</th>
            <th class="text-center w-10">Aksi</th>
        </tr>
        </thead>
        <tbody>

        @if($faqs->count() == 0)
            <tr>
                <td class="text-center" colspan="5">Data Tidak Ditemukan :(</td>
            </tr>
        @endif
        @foreach($faqs as $key => $faq)
            <tr>
                <td class="text-center fw-semibold">
                    <span>{{ $key + 1 }}</span>
                </td>
                <td class="fw-semibold">
                    <span>{{ $faq->subevent->name }}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $faq->answer !!}</span>
                </td>
                <td class="fw-semibold">
                    <span>{!! $faq->question !!}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="{{ route('superuser.faq.edit', $faq->id) }}" wire:loading.attr="disabled"
                           class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sunting Event">
                            <i class="fa fa-pen"></i>
                        </a>
                        <button type="button" wire:click="delete({{ $faq->id }})" wire:loading.attr="disabled"
                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Hapus FAQ">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $faqs->links('components.pagination') }}
</div>
