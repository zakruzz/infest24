<?php

namespace App\Http\Livewire\Superuser\Configuration;

use App\Http\Traits\Support\FileUploadTrait;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ConfigurationIndex extends Component{
    use LivewireAlert;
    use FileUploadTrait;

    public $rules   = [
        'configuration.name_website'    => 'required',
        'configuration.email'           => 'required',
        'configuration.phone_number'    => 'required',
        'configuration.fax_number'      => 'nullable',
        'configuration.address'         => 'required',
        'configuration.address_city'    => 'required',
        'configuration.meta_keywords'   => 'required',
        'configuration.meta_description'=> 'required',
        'configuration.status'          => 'required',
        'fileLogo'                      => 'nullable|mimes:jpeg,jpg,png|max:5000',
        'fileIcon'                      => 'nullable|mimes:jpeg,jpg,png|max:5000',
    ];

    protected $listeners = [
        'confirmSave'
    ];

    public $configuration;
    public $fileLogo, $fileIcon;

    public function mount(){
        $this->configuration    = detail_website();
    }

    public function save(){
        $this->confirm('Simpan Perubahan ?', [
            'onConfirmed' => 'confirmSave',
        ]);
    }

    public function confirmSave(){
        $this->validate();

        try {
            if ($this->fileLogo){
                $uploadLogo                 = $this->uploadFile('config/', $this->fileLogo, 'LOGO');
                $this->configuration->logo  = $uploadLogo;
            }

            if ($this->fileIcon){
                $uploadIcon                 = $this->uploadFile('config/', $this->fileIcon, 'ICON');
                $this->configuration->icon  = $uploadIcon;
            }

            $this->configuration->save();

            return $this->alert('success', 'Perubahan berhasil tersimpan');

        }catch (\Exception $exception){
            insert_errorlog('Save Information Website', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        return view('livewire.superuser.configuration.configuration-index')
            ->extends('layouts.superuser.app')->section('content');
    }

}
