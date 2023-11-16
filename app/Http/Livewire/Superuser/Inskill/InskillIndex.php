<?php

namespace App\Http\Livewire\Superuser\Inskill;

use Livewire\Component;
use App\Models\Auth\User;
use App\Models\BuktiFollow;
use App\Models\Participant;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class InskillIndex extends Component
{
    use WithPagination;
    use LivewireAlert;
    
    public $ss_infest, $ss_instastory, $ss_poster, $ss_twibbon, $link_drive;
    public $filterPendaftar;
    public $perPage = 10;

    public function bukti_persyaratan($id){
        $user = User::where('id', $id)->first()->id;
        $buktiFollow = BuktiFollow::where('user_id', $user)->first();
        $this->ss_infest = $buktiFollow->ss_infest;
        $this->ss_instastory = $buktiFollow->ss_instastory;
        $this->ss_poster = $buktiFollow->ss_poster;
        $this->ss_twibbon = $buktiFollow->ss_twibbon;
        $this->link_drive = $buktiFollow->link_drive;
        $this->dispatchBrowserEvent('showModalBuktiPersyaratan');
    }

    public function render()
    {
        $generals = Participant::query()->where('type', 'Inskill');

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

        return view('livewire.superuser.inskill.inskill-index', $data)
        ->extends('layouts.superuser.app')->section('content');
    }
}
