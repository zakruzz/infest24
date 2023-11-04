<?php

namespace App\Http\Livewire\Superuser\Dashboard;

use Livewire\Component;
use App\Models\Content\Slider;
use App\Http\Traits\Support\FileUploadTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DashboardIndex extends Component{
    use LivewireAlert;
    use FileUploadTrait;

    public $fileAbstrak;
    public $abstrak;
    public $editMode        = FALSE;

    public function render(){
        return view('livewire.superuser.dashboard.dashboard-index')
            ->extends('layouts.superuser.app')->section('content');
    }

    public function showModalAbstrak(){
        $this->abstrak           = new Slider();
        $this->abstrak->clickable= FALSE;

        $this->editMode         = FALSE;
        $this->dispatchBrowserEvent('showModalAbstrak');
    }

    public function store(){
        $this->rules['imageSlider'] = $this->editMode ? 'nullable' : 'required'.'|'.$this->rules['imageSlider'];
        $this->validate();
        try {

            if (!$this->editMode){
                if (Slider::count() == 10){
                    return $this->alert('error', 'Gagal. Telah mencapai jumlah maksimum slider');
                }
            }

            if ($this->imageSlider){
                $uploadImage                = $this->uploadFile('slider/', $this->imageSlider, 'SLIDER');
                $this->abstrak->image        = $uploadImage;
            }

            $this->abstrak->save();

            $this->dispatchBrowserEvent('hideModalSlider');
            return $this->alert('success', 'Slider berhasil tersimpan');

        }catch (\Exception $exception){
            insert_errorlog('Store/Update Slider', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

}
