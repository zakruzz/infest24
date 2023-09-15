<?php

namespace App\Http\Traits;

use App\Models\Blog\BlogCategory;
use Illuminate\Support\Str;

trait BlogCategoryTrait{

    public $blogCategory;

    public $editBlogCategory    = FALSE;
    public $createBlogCategory  = FALSE;

    public function showBlogCategory(){
        $this->dispatchBrowserEvent('showModalBlogCategory');
    }

    public function addBlogCategory(){
        $this->blogCategory             = new BlogCategory();
        $this->createBlogCategory       = TRUE;
        $this->editBlogCategory         = FALSE;
    }

    public function editBlogCategory($id){
        $this->blogCategory             = BlogCategory::find($id);
        $this->createBlogCategory       = FALSE;
        $this->editBlogCategory         = TRUE;
    }

    public function resetFormBlogCategory(){
        $this->blogCategory             = NULL;
        $this->createBlogCategory       = FALSE;
        $this->editBlogCategory         = FALSE;
    }

    public function saveBlogCategory(){
        $this->validate(
            ['blogCategory.name'       => 'required']
        );
        try {

            $this->blogCategory->slug       = Str::slug($this->blogCategory->name);
            $this->blogCategory->save();
            $this->resetFormBlogCategory();

            return $this->alert('success', 'Kategori berita berhasil tersimpan');

        }catch (\Exception $exception){
            insert_errorlog('Store/Update Blog Category', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function deleteBlogCategory($id){
        $this->confirm('Apakah anda yakin menghapus kategori berita ini?', [
            'onConfirmed' => 'confirmDeleteBlogCategory',
        ]);
        $this->blogCategory            = BlogCategory::find($id);
    }

    public function confirmDeleteBlogCategory(){
        try {

            $this->blogCategory->delete();
            return $this->alert('success', 'Kategori berita berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Blog Category', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

}
