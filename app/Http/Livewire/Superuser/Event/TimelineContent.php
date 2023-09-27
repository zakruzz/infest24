<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\SubeventTimeline;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Event\Subevent;
use Livewire\Component;

class TimelineContent extends Component
{
    use FileUploadTrait;
    use LivewireAlert;

    public $rules = [
        'timeline.subevent_id' => 'required',
        'timeline.name' => 'required',
        'timeline.desc' => 'required',
        'timeline.start_date' => 'required',
        'timeline.end_date' => 'required',
    ];
    
    public $timeline;
    public $editMode = FALSE;

    public function mount($id = null){
        if ($id){
            $this->timeline = SubeventTimeline::find($id);
            $this->editMode = TRUE;
        }else{
            $this->timeline = new SubeventTimeline();
            $this->editMode = FALSE;
        }
    }

    public function save(){

        $this->validate();

        try {
            $this->timeline->save();

            return $this->flash('success', 'Timeline berhasil tersimpan', [],
                route('superuser.timeline.index'));

        }catch (\Exception $exception){
            insert_errorlog('Create/Update Timeline', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');;
        }
    }

    public function render()
    {
        $data = [
            'subevents' => Subevent::orderBy('name', 'ASC')->get()
        ];

        return view('livewire.superuser.event.timeline-content', $data)
            ->extends('layouts.superuser.app')->section('content');
    }
}
