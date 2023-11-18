<?php

namespace App\Http\Livewire\Income\Dashboard;

use App\Models\Abstrak;
use Livewire\Component;
use App\Models\Pembayaran;
use App\Models\Participant;
use App\Models\Content\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\Support\FileUploadTrait;
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
        $participant = Participant::where('user_id', Auth::user()->id)->first();
        
        if($abstrak) {
            unlink(storage_path('app/public/abstrak/'.$abstrak->filename));
            Abstrak::where('user_id', Auth::user()->id)->delete();
        }

        $file = $this->fileAbstrak;
        $fileAbstrak = 'Abstrak_' . json_decode($participant->name)[0] . '_' . $participant->institusi . '_' . $file->getClientOriginalName();
        $fileName = str_replace(' ', '-', $fileAbstrak);
        $filePath = $file->storeAs('public/abstrak', $fileName);

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
        // $this->rules['filePembayaran'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['filePembayaran'];
        // $this->validate();

        $pembayaran = Pembayaran::where('user_id', Auth::user()->id)->first();
        $participant = Participant::where('user_id', Auth::user()->id)->first();

        if($pembayaran) {
            unlink(storage_path('app/public/pembayaran/'.$pembayaran->filename));
            Pembayaran::where('user_id', Auth::user()->id)->delete();
        }

        $file = $this->filePembayaran;
        $filePembayaran = "Pembayaran_" . json_decode($participant->name)[0] . '_' . $participant->institusi . '.' . $file->getClientOriginalExtension();
        $fileName = str_replace(' ', '-', $filePembayaran);
        $filePath = $file->storeAs('public/pembayaran', $fileName);


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
        $pembayaran = Pembayaran::where('user_id', Auth::user()->id)->first();
        $abstrak = Abstrak::where('user_id', Auth::user()->id)->first();

        if($pembayaran) {
            $bukti_bayar = $pembayaran->filename;
        }else {
            $bukti_bayar = '';
        }

        if($abstrak) {
            $abstraks = $abstrak->filename;
        }else {
            $abstraks = '';
        }

        $data = [
            "bukti_bayar" => $bukti_bayar,
            "abstraks" => $abstraks,
        ];

        return view('livewire.income.dashboard.dashboard-index', $data)
            ->extends('layouts.income.app')->section('content');
    }

}
