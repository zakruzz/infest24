<?php

namespace App\Http\Livewire\Superuser\ODL;

use App\Models\ODL\SubeventODLUndangan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ODLUndanganIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $undangan;
    public $filterUndangan;
    public $perPage = 10;

    public function resetFilterUndangan(){
        $this->filterUndangan  = [];
    }

    public function render()
    {
        $invites = SubeventODLUndangan::query();

        if ($this->filterUndangan){

            if (array_key_exists("query", $this->filterUndangan)){
                $invites->where('name','like', '%' . $this->filterUndangan['query'] . '%');
            }

            if (array_key_exists("order", $this->filterUndangan) && $this->filterUndangan['order']){
                $invites->orderBy('id', $this->filterUndangan['order']);
            }

        }else{
            $invites->orderBy('id', 'DESC');
        }

        $data= [
            'invites' => $invites->paginate($this->perPage),
        ];

        return view('livewire.superuser.odl.odl-undangan-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
