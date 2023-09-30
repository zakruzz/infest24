<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\Subevent;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Event\Event;
use Livewire\Component;

class SubeventContent extends Component
{
    use FileUploadTrait;
    use LivewireAlert;

    public $rules = [
        'subevent.event_id' => 'required',
        'subevent.name' => 'required',
        'subevent.desc' => 'required',
        'subeventGuideBook' => 'mimes:pdf|max:20000',
        'subeventPoster' => 'mimes:pdf|max:20000',
        'subeventLogo' => 'mimes:jpeg,jpg,png|max:5000',
        'subeventBackground' => 'mimes:jpeg,jpg,png|max:5000',
        'subevent.regist_open' => 'required',
        'subevent.regist_close' => 'required',
    ];

    public $subevent;
    public $subeventLogo;
    public $subeventBackground;
    public $subeventGuideBook;
    public $subeventPoster;
    public $editMode = FALSE;

    public function mount($id = null){
        if ($id){
            $this->subevent = Subevent::find($id);
            $this->editMode = TRUE;
        }else{
            $this->subevent = new Subevent();
            $this->editMode = FALSE;
        }
    }

    public function save(){
        $this->rules['subeventLogo'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['subeventLogo'];
        $this->rules['subeventBackground'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['subeventBackground'];
        $this->rules['subeventGuideBook'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['subeventGuideBook'];
        $this->rules['subeventPoster'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['subeventPoster'];
        $this->validate();

        try {
            if ($this->subeventLogo){
                $uploadImage = $this->uploadFile('Subevent/Logo/', $this->subeventLogo, 'SUBEVENTLOGO');
                $this->subevent->logo = $uploadImage;
            }

            if ($this->subeventBackground){
                $uploadImage = $this->uploadFile('Subevent/Background/', $this->subeventBackground, 'SUBEVENTBG');
                $this->subevent->background = $uploadImage;
            }

            if ($this->subeventGuideBook){
                $uploadFile = $this->uploadFile('Subevent/GuideBook/', $this->subeventGuideBook, 'SUBEVENTGB');
                $this->subevent->guide_book = $uploadFile;
            }

            if ($this->subeventPoster){
                $uploadFile = $this->uploadFile('Subevent/Poster/', $this->subeventPoster, 'SUBEVENTPOSTER');
                $this->subevent->poster = $uploadFile;
            }

            $this->subevent->slug = Str::slug($this->subevent->name).'-'.rand(0000, 9999);
            $this->subevent->save();

            return $this->flash('success', 'Subevent berhasil tersimpan', [],
                route('superuser.subevent.index'));

        }catch (\Exception $exception){
            insert_errorlog('Create/Update Event', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');;
        }
    }

    public function render()
    {
        $data = [
            'events' => Event::orderBy('name', 'ASC')->get()
        ];

        return view('livewire.superuser.event.subevent-content', $data)
            ->extends('layouts.superuser.app')->section('content');
    }
}
