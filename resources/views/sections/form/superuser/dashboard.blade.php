<div class="row">
    <div class="col-lg-12 mb-2">
        <span>Ketentuan (<span class="text-danger">*</span>)</span>
        <br>
        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempore officia sequi possimus ducimus iste debitis illo animi accusantium placeat consectetur hic magnam deleniti qui quas aliquid dicta minus distinctio, fuga delectus laborum quis maxime, omnis voluptas! Ad voluptatum accusantium et facere officiis animi, beatae magnam ratione ex ducimus, sint est repellat sequi provident aliquid vero fuga blanditiis libero deleniti voluptate quidem. Placeat excepturi, minus voluptatem expedita beatae possimus tenetur obcaecati doloribus impedit, quos eum commodi fugiat id! Accusantium facilis aliquam possimus. Enim recusandae necessitatibus quasi, alias, quisquam nulla nihil officia voluptas illum esse molestias doloribus impedit ut mollitia repellendus.</small>
    </div>
    <div class="col-lg-12 mb-3">
        <label class="form-label" for="field-image-slider">Abstrak <span class="text-danger">*</span></label>
        <input class="form-control @error('fileAbstrak') is-invalid @enderror" type="file" id="field-image-slider"
               wire:model="fileAbstrak" wire:loading.attr="disabled" accept=".pdf">
        <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum size 5MB (.pdf)</small>
        @error('fileAbstrak')
        <span class="invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
