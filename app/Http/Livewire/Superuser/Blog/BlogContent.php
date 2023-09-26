<?php

namespace App\Http\Livewire\Superuser\Blog;

use App\Http\Traits\BlogCategoryTrait;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogTag;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class BlogContent extends Component{
    use BlogCategoryTrait;
    use FileUploadTrait;
    use LivewireAlert;

    public $rules = [
        'blog.blog_category_id'   => 'required',
        'blog.title'              => 'required',
        'blog.body'               => 'required',
        'blog.image_alt'          => 'required',
        'imageBlog'               => 'mimes:jpeg,jpg,png|max:5000',
        // Blog Category
        'blogCategory.name'       => 'nullable',
    ];

    public $blog;
    public $imageBlog;

    public $editMode            = FALSE;

    public $listeners = [
        'confirmDeleteBlogCategory'
    ];

    public function mount($id = null){
        if ($id){
            $this->blog             = Blog::find($id);
            $this->editMode         = TRUE;
        }else{
            $this->blog             = new Blog();
            $this->editMode         = FALSE;
        }
    }

    public function save(){
        $this->rules['imageBlog'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['imageBlog'];
        $this->validate();

        try {
            if ($this->imageBlog){
                $uploadImage                = $this->uploadFile('blog/', $this->imageBlog, 'BLOG');
                $this->blog->image          = $uploadImage;
            }

            $this->blog->slug               = Str::slug($this->blog->title).'-'.rand(0000, 9999);
            $this->blog->save();

            return $this->flash('success', 'Berita berhasil tersimpan', [],
                route('superuser.blog.index'));

        }catch (\Exception $exception){
            insert_errorlog('Crate/Update Blog', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        $data['categories']     = BlogCategory::orderBy('name', 'ASC')->get();
        $data['tags']           = BlogTag::orderBy('name', 'ASC')->get();

        return view('livewire.superuser.blog.blog-content', $data)
            ->extends('layouts.superuser.app')->section('content');
    }

}
