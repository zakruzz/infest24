<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\Event;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Traits\Support\FileUploadTrait;
use Livewire\Component;

class EventContent extends Component
{
    use FileUploadTrait;
    use LivewireAlert;
    
    public $rules = [
        'event.name' => 'required',
        'event.desc' => 'required',
        'eventLogo' => 'mimes:jpeg,jpg,png|max:5000',
        'eventBackground' => 'mimes:jpeg,jpg,png|max:5000',
    ];

    public $event;
    public $eventLogo;
    public $eventBackground;
    public $editMode = FALSE;

    public function mount($id = null){
        if ($id){
            $this->event = Event::find($id);
            $this->editMode = TRUE;
        }else{
            $this->event = new Event();
            $this->editMode = FALSE;
        }
    }

    public function save(){
        $this->rules['eventLogo'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['eventLogo'];
        $this->rules['eventBackground'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['eventBackground'];
        $this->validate();

        try {
            if ($this->eventLogo){
                $uploadImage = $this->uploadFile('event/', $this->eventLogo, 'EVENTLOGO');
                $this->event->logo = $uploadImage;
            }

            if ($this->eventBackground){
                $uploadImage = $this->uploadFile('event/', $this->eventBackground, 'EVENTBG');
                $this->event->background = $uploadImage;
            }

            $this->event->slug = Str::slug($this->event->name).'-'.rand(0000, 9999);
            $this->event->save();

            return $this->flash('success', 'Event berhasil tersimpan', [],
                route('superuser.event.index'));

        }catch (\Exception $exception){
            insert_errorlog('Create/Update Event', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');;
        }
    }

    public function render(){
        return view('livewire.superuser.event.event-content')
            ->extends('layouts.superuser.app')->section('content');
    }
}
