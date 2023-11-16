<div class="row">
    <div class="col-lg-12 mb-2">
        <span><strong>INFO</strong></span>
        <br>
        <p class="pt-0">
            Bukti pembayaran menggunakan file image (.jpg,.jpeg,.png) <br>
            <br>
            No rekening : <br>
            6730498517 BCA - Muhammad Hisbun Nasrirrokhim
            <br>
            1400022255849 Mandiri - PUNGKY ALVINA PRASIS <br>
            <br>
            CP INSKILL (LO) 
            <br>
            Kinan 0821-3967-5390
            <br>
            Rama 0895-3962-54665

            
        </p>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-image-pembayaran">Pembayaran <span class="text-danger">*</span></label>
        <input class="form-control @error('filePembayaran') is-invalid @enderror" type="file" id="field-image-pembayaran"
               wire:model="filePembayaran" wire:loading.attr="disabled" accept="image/*">
        <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum size 5MB (.png,.jpg,.jpeg)</small>
        @error('filePembayaran')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="col-lg-12 mb-3">
        <a href="{{ asset('storage/pembayaran/' . $bukti_bayar)  }}" target="_blank">{{ $bukti_bayar }}</a>
    </div>
</div>
