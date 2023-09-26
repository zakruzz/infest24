<?php

namespace App\Http\Livewire\Superuser\Event;

use App\Models\Event\Subevent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class SubeventIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $subevent;
    public $filterSubevent;
    public $perPage = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function resetFilterEvent(){
        $this->filterSubevent  = [];
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus event ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->subevent = Subevent::find($id);
    }

    public function confirmDelete(){
        try {

            $this->subevent->delete();
            return $this->alert('success', 'Subevent berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Subevent', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render()
    {
        $subevents = Subevent::query();

        if ($this->filterSubevent){

            if (array_key_exists("query", $this->filterSubevent)){
                $subevents->where('name','like', '%' . $this->filterSubevent['query'] . '%');
            }

            if (array_key_exists("order", $this->filterSubevent) && $this->filterSubevent['order']){
                $subevents->orderBy('id', $this->filterSubevent['order']);
            }

        }else{
            $subevents->orderBy('id', 'DESC');
        }

        $data= [
            'subevents' => $subevents->paginate($this->perPage),
        ];

        return view('livewire.superuser.event.subevent-index', $data)
            ->extends('layouts.superuser.app')->section('content');
    }
}
