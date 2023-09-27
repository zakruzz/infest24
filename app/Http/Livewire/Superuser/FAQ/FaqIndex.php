<?php

namespace App\Http\Livewire\Superuser\FAQ;

use App\Models\FAQ\Faq;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class FaqIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $faq;
    public $filterFaq;
    public $perPage = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterFaq(){
        $this->filterFaq  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus FAQ ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->faq = Faq::find($id);
    }

    public function confirmDelete(){
        try {

            $this->faq->delete();
            return $this->alert('success', 'FAQ berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete FAQ', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render()
    {
        $faqs = Faq::query();

        if ($this->filterFaq){

            if (array_key_exists("query", $this->filterfaq)){
                $faqs->where('name','like', '%' . $this->filterfaq['query'] . '%');
            }

            if (array_key_exists("order", $this->filterFaq) && $this->filterFaq['order']){
                $faqs->orderBy('id', $this->filterFaq['order']);
            }

        }else{
            $faqs->orderBy('id', 'DESC');
        }

        $data= [
            'faqs' => $faqs->paginate($this->perPage),
        ];

        return view('livewire.superuser.faq.faq-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
