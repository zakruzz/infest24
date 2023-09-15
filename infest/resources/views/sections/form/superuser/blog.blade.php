<div class="row mt-3">
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-title-blog">Judul Berita <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input type="text" class="form-control @error('blog.title') is-invalid @enderror"
                       id="field-title-blog"
                       wire:model.defer="blog.title"
                       placeholder="Lorem Ipsum Sit Dolor Amit">
                @error('blog.title')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-sip-blog">Kategori Berita <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div class="input-group">
                    <select class="form-select @error('blog.blog_category_id') is-invalid @enderror"
                            wire:model.defer="blog.blog_category_id">
                        <option value=""> - Pilih Kategori Berita -</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button wire:click="showBlogCategory" type="button" class="btn btn-alt-primary">
                        <i class="fa fa-plus me-1"></i> Tambah Kategori
                    </button>
                    @error('blog.blog_category_id')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-sip-blog">Badan Berita <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <div wire:ignore>
                    <textarea id="field-body-blog" rows="5">{!! $editMode ? $blog->body : '' !!}</textarea>
                    <small class="text-muted"> <i class="fa fa-info-circle"></i> Shift + Enter untuk 1x enter</small>
                </div>

                @push('scripts')
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#field-body-blog'))
                            .then(editor => {
                                editor.model.document.on('change:data', () => {
                                @this.set('blog.body', editor.getData(), true);
                                })
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                @endpush

                @error('blog.biography')
                    <span class="invalid-feedback">
                        {{ $message }}
                     </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-image-blog">Gambar <span class="text-danger">*</span></label>
            <div class="col-lg-2">
                <img class="img-preview-upload" src="{{ $this->imageBlog ? $this->imageBlog->temporaryUrl() : ($editMode ? $blog->getImageUrl() : img_default()) }}" alt="">
            </div>
            <div class="col-lg-8">
                <input class="form-control @error('imageBlog') is-invalid @enderror" type="file" id="field-image-blog"
                       wire:model="imageBlog" wire:loading.attr="disabled" accept="image/*">
                <small class="text-muted"> <i class="fa fa-info-circle"></i> Maksimum gambar 5MB (.jpeg/.jpg/.png)</small>
                @error('imageBlog')
                     <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row mb-4">
            <label class="col-lg-2 form-label" for="field-image-alt-blog">Deskripsi Gambar <span class="text-danger">*</span></label>
            <div class="col-lg-10">
                <input type="text" class="form-control @error('blog.image_alt') is-invalid @enderror"
                       id="field-image-alt-blog"
                       wire:model.defer="blog.image_alt"
                       placeholder="Gambar Lorem. Lorem ipsum sit dolor amit">
                @error('blog.image_alt')
                <span class="invalid-feedback">
                    {{ $message }}
                 </span>
                @enderror
            </div>
        </div>
    </div>
</div>

