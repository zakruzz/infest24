<?php

namespace App\Http\Livewire\Superuser\Blog;

use App\Models\Blog\BlogComment;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComments extends Component{
    use WithPagination;
    use LivewireAlert;

    public $blog;
    public $filterComment;
    public $perPage         = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterComment(){
        $this->filterComment  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus komentar berita ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->blog            = BlogComment::find($id);
    }

    public function confirmDelete(){
        try {

            $this->blog->delete();
            return $this->alert('success', 'Komentar berita berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Blog Comment', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        $comments                    = BlogComment::query();

        if ($this->filterComment){

            if (array_key_exists("query", $this->filterComment)){
                $comments->orWhere('name','like', '%' . $this->filterComment['query'] . '%')
                    ->orWhere('comment','like', '%' . $this->filterComment['query'] . '%');
            }

            if (array_key_exists("order", $this->filterComment) && $this->filterComment['order']){
                $comments->orderBy('id', $this->filterComment['order']);
            }

        }else{
            $comments->orderBy('id', 'DESC');
        }

        $data['comments']           = $comments->paginate($this->perPage);

        return view('livewire.superuser.blog.blog-comments', $data)
            ->extends('layouts.superuser.app')->section('content');
    }

}
