<?php

namespace App\Http\Livewire\Superuser\Inspection;

use App\Models\Participant;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class AbstrakIndex extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $pendaftar;
    public $filterPendaftar;
    public $perPage = 10;

    public function render()
    {
        $generals = Participant::query()->where('type', 'Inspection');

        if ($this->filterPendaftar){

            if (array_key_exists("query", $this->filterPendaftar)){
                $generals->where('name','like', '%' . $this->filterPendaftar['query'] . '%');
            }

            if (array_key_exists("order", $this->filterPendaftar) && $this->filterPendaftar['order']){
                $generals->orderBy('id', $this->filterPendaftar['order']);
            }

        }else{
            $generals->orderBy('id', 'DESC');
        }

        $data= [
            'generals' => $generals->paginate($this->perPage),
        ];

        return view('livewire.superuser.inspection.inspection-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
