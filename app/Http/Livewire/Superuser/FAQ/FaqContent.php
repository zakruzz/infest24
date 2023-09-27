<?php

namespace App\Http\Livewire\Superuser\FAQ;

use App\Models\FAQ\Faq;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Event\Subevent;
use Livewire\Component;

class FaqContent extends Component
{

    use FileUploadTrait;
    use LivewireAlert;

    public $rules = [
        'faq.subevent_id' => 'required',
        'faq.answer' => 'required',
        'faq.question' => 'required',
    ];

    public $faq;
    public $editMode = FALSE;

    public function mount($id = null){
        if ($id){
            $this->faq = Faq::find($id);
            $this->editMode = TRUE;
        }else{
            $this->faq = new Faq();
            $this->editMode = FALSE;
        }
    }

    public function save(){

        $this->validate();

        try {
            $this->faq->save();

            return $this->flash('success', 'FAQ berhasil tersimpan', [],
                route('superuser.faq.index'));

        }catch (\Exception $exception){
            insert_errorlog('Create/Update FAQ', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');;
        }
    }

    public function render()
    {
        $data = [
            'subevents' => Subevent::orderBy('name', 'ASC')->get()
        ];

        return view('livewire.superuser.faq.faq-content', $data)
            ->extends('layouts.superuser.app')->section('content');
    }
}
