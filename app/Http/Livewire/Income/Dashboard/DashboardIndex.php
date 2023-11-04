<?php

namespace App\Http\Livewire\Income\Dashboard;

use App\Models\Abstrak;
use Livewire\Component;
use App\Models\Content\Slider;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Participant;
use App\Models\Pembayaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DashboardIndex extends Component{
    use LivewireAlert;
    use FileUploadTrait;

    public $rules           = [
        'fileAbstrak'           => 'mimes:jpeg,jpg,png|max:10000',
        'filePembayaran'           => 'mimes:jpeg,jpg,png|max:10000',
    ];

    public $fileAbstrak;
    public $abstrak;
    public $filePembayaran;
    public $pembayaran;
    public $editMode        = FALSE;

    public function showModalAbstrak(){
        $this->editMode         = FALSE;
        $this->dispatchBrowserEvent('showModalAbstrak');
    }

    public function showModalPembayaran(){
        $this->editMode         = FALSE;
        $this->dispatchBrowserEvent('showModalPembayaran');
    }

    public function storeAbstrak(){
        // $this->rules['fileAbstrak'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['fileAbstrak'];
        // $this->validate();

        $abstrak = Abstrak::where('user_id', Auth::user()->id)->first();
        if($abstrak) {
            unlink(storage_path('app/abstrak/'.$abstrak->filename));
            Abstrak::where('user_id', Auth::user()->id)->delete();
        }

        $file = $this->fileAbstrak;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('abstrak', $fileName);

        $participant = Participant::where('user_id', Auth::user()->id)->first();
        if($participant) {
            $participant_id = $participant->id;
        }

        Abstrak::create([
            "user_id" => Auth::user()->id,
            "participant_id" => $participant_id,
            "filename" => $fileName,
        ]);

        $this->dispatchBrowserEvent('hideModalAbstrak');
        return "File berhasil diunggah";
    }

    public function storePembayaran(){
        $this->rules['filePembayaran'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['filePembayaran'];
        $this->validate();

        $pembayaran = Pembayaran::where('user_id', Auth::user()->id)->first();
        if($pembayaran) {
            unlink(storage_path('app/pembayaran/'.$pembayaran->filename));
            Pembayaran::where('user_id', Auth::user()->id)->delete();
        }

        $file = $this->filePembayaran;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('pembayaran', $fileName);

        $participant = Participant::where('user_id', Auth::user()->id)->first();
        if($participant) {
            $participant_id = $participant->id;
        }

        Pembayaran::create([
            "user_id" => Auth::user()->id,
            "participant_id" => $participant_id,
            "filename" => $fileName,
        ]);

        $this->dispatchBrowserEvent('hideModalPembayaran');
        return "File berhasil diunggah";
    }

    public function render(){
        return view('livewire.income.dashboard.dashboard-index')
            ->extends('layouts.income.app')->section('content');
    }

}
