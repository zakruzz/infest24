<?php

namespace App\Http\Livewire\Superuser\Blog;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class BlogIndex extends Component{
    use WithPagination;
    use LivewireAlert;

    public $blog;
    public $filterBlog;
    public $perPage         = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterBlog(){
        $this->filterBlog  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus berita ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->blog            = Blog::find($id);
    }

    public function confirmDelete(){
        try {

            $this->blog->delete();
            return $this->alert('success', 'Berita berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Blog', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        $blogs                    = Blog::query();

        if ($this->filterBlog){

            if (array_key_exists("category", $this->filterBlog) && $this->filterBlog['category']){
                $blogs->where('blog_category_id', $this->filterBlog['category']);
            }

            if (array_key_exists("query", $this->filterBlog)){
                $blogs->orWhere('title','like', '%' . $this->filterBlog['query'] . '%')
                    ->orWhere('body','like', '%' . $this->filterBlog['query'] . '%');
            }

            if (array_key_exists("order", $this->filterBlog) && $this->filterBlog['order']){
                $blogs->orderBy('id', $this->filterBlog['order']);
            }

        }else{
            $blogs->orderBy('id', 'DESC');
        }

        $data['blogs']              = $blogs->paginate($this->perPage);
        $data['categories']         = BlogCategory::orderBy('name', 'ASC')->get();

        return view('livewire.superuser.blog.blog-index', $data)
            ->extends('layouts.superuser.app')->section('content');
    }

}
