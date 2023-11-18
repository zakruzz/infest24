<?php

namespace App\Http\Livewire\Superuser\Inskill;

use Livewire\Component;
use App\Models\Participant;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PembayaranIndex extends Component
{
    use WithPagination;
    use LivewireAlert;
    
    public $filterPembayaran;
    public $perPage = 10;

    public function render()
    {
        $generals = Participant::query()->where('type', 'Inskill');

        if ($this->filterPembayaran){

            if (array_key_exists("query", $this->filterPembayaran)){
                $generals->where('name','like', '%' . $this->filterPembayaran['query'] . '%');
            }

            if (array_key_exists("order", $this->filterPembayaran) && $this->filterPembayaran['order']){
                $generals->orderBy('id', $this->filterPembayaran['order']);
            }

        }else{
            $generals->orderBy('id', 'DESC');
        }

        $data= [
            'generals' => $generals->paginate($this->perPage),
        ];

        return view('livewire.superuser.inskill.pembayaran-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
