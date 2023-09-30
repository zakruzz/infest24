<?php

namespace App\Http\Livewire\Superuser\ODL;

use App\Models\ODL\SubeventODLUmum;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ODLUmumIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $umum;
    public $filterUmum;
    public $perPage = 10;

    public function render()
    {
        $generals = SubeventODLUmum::query();

        if ($this->filterUmum){

            if (array_key_exists("query", $this->filterUmum)){
                $generals->where('name','like', '%' . $this->filterUmum['query'] . '%');
            }

            if (array_key_exists("order", $this->filterUmum) && $this->filterUmum['order']){
                $generals->orderBy('id', $this->filterUmum['order']);
            }

        }else{
            $generals->orderBy('id', 'DESC');
        }

        $data= [
            'generals' => $generals->paginate($this->perPage),
        ];

        return view('livewire.superuser.odl.odl-umum-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
