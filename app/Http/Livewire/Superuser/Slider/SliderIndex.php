<?php

namespace App\Http\Livewire\Superuser\Slider;

use App\Http\Traits\Support\FileUploadTrait;
use App\Models\Content\Slider;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class SliderIndex extends Component{
    use WithPagination;
    use LivewireAlert;
    use FileUploadTrait;

    public $rules           = [
        'imageSlider'           => 'mimes:jpeg,jpg,png|max:5000',
        'slider.url'            => 'nullable',
        'slider.order'          => 'required',
        'slider.clickable'      => 'nullable',
    ];

    public $slider;
    public $imageSlider;

    public $editMode        = FALSE;
    public $perPage         = 10;

    protected $listeners = [
        'confirmDelete',
    ];

    public function create(){
        $this->slider           = new Slider();
        $this->slider->clickable= FALSE;

        $this->editMode         = FALSE;
        $this->dispatchBrowserEvent('showModalSlider');
    }

    public function edit($id){
        $this->slider           = Slider::find($id);
        $this->editMode         = TRUE;
        $this->dispatchBrowserEvent('showModalSlider');
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
                $this->slider->image        = $uploadImage;
            }

            $this->slider->save();

            $this->dispatchBrowserEvent('hideModalSlider');
            return $this->alert('success', 'Slider berhasil tersimpan');

        }catch (\Exception $exception){
            insert_errorlog('Store/Update Slider', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function delete($id){
        $this->confirm('Apakah anda yakin menghapus Slider ini?', [
            'onConfirmed' => 'confirmDelete',
        ]);
        $this->slider               = Slider::find($id);
    }

    public function confirmDelete(){
        try {

            $this->slider->delete();
            return $this->alert('success', 'Slider berhasil dihapus');

        }catch (\Exception $exception){
            insert_errorlog('Delete Slider', $exception->getMessage());
            return $this->alert('error', 'Terjadi Kesalahan');
        }
    }

    public function render(){
        $data['sliders']            = Slider::orderBy('order', 'ASC')->paginate($this->perPage);

        return view('livewire.superuser.slider.slider-index', $data)
            ->extends('layouts.superuser.app')->section('content');
    }

}
