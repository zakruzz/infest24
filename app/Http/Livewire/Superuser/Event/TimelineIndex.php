<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\SubeventTimeline;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class TimelineIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $timeline;
    public $filterTimeline;
    public $perPage = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterTimeline(){
        $this->filterTimeline  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus timeline ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->timeline = SubeventTimeline::find($id);
    }

    public function confirmDelete(){
        try {

            $this->timeline->delete();
            return $this->alert('success', 'Timeline berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Timeline', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render()
    {
        $timelines = SubeventTimeline::query();

        if ($this->filterTimeline){

            if (array_key_exists("query", $this->filterTimeline)){
                $timelines->where('name','like', '%' . $this->filterTimeline['query'] . '%');
            }

            if (array_key_exists("order", $this->filterTimeline) && $this->filterTimeline['order']){
                $timelines->orderBy('id', $this->filterTimeline['order']);
            }

        }else{
            $timelines->orderBy('id', 'DESC');
        }

        $data= [
            'timelines' => $timelines->paginate($this->perPage),
        ];

        return view('livewire.superuser.event.timeline-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
