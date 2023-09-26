<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class EventIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $event;
    public $filterEvent;
    public $perPage = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterEvent(){
        $this->filterEvent  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus event ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->event = Event::find($id);
    }

    public function confirmDelete(){
        try {

            $this->event->delete();
            return $this->alert('success', 'Event berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Event', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render()
    {
        $events = Event::query();

        if ($this->filterEvent){

            if (array_key_exists("query", $this->filterEvent)){
                $events->where('name','like', '%' . $this->filterEvent['query'] . '%');
            }

            if (array_key_exists("order", $this->filterEvent) && $this->filterEvent['order']){
                $events->orderBy('id', $this->filterEvent['order']);
            }

        }else{
            $events->orderBy('id', 'DESC');
        }

        $data= [
            'events' => $events->paginate($this->perPage),
        ];

        return view('livewire.superuser.event.event-index', $data)
            ->extends('layouts.superuser.app')->section('content');
    }
}
