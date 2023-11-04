<?php

namespace App\Http\Livewire\Income\Dashboard;

use Livewire\Component;
use App\Models\Content\Slider;
use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Abstrak;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DashboardIndex extends Component{
    use LivewireAlert;
    use FileUploadTrait;

    public $rules           = [
        'fileAbstrak'           => 'max:5000',
        'filePembayaran'           => 'mimes:jpeg,jpg,png|max:5000',
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
        $this->rules['fileAbstrak'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['fileAbstrak'];
        $this->validate();

        $file = $this->fileAbstrak;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('abstrak', $fileName);

        $this->dispatchBrowserEvent('hideModalAbstrak');
        return "File berhasil diunggah";
    }

    public function storePembayaran(){
        $this->rules['filePembayaran'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['filePembayaran'];
        $this->validate();

        $file = $this->filePembayaran;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('pembayaran', $fileName);

        $this->dispatchBrowserEvent('hideModalPembayaran');
        return "File berhasil diunggah";
    }

    public function render(){
        return view('livewire.income.dashboard.dashboard-index')
            ->extends('layouts.income.app')->section('content');
    }

}
