<?php

namespace App\Http\Livewire\Superuser\Dashboard;

use Livewire\Component;
use App\Models\Content\Slider;

class DashboardIndex extends Component{

    public $slider;
    public $editMode        = FALSE;

    public function render(){
        return view('livewire.superuser.dashboard.dashboard-index')
            ->extends('layouts.superuser.app')->section('content');
    }

    public function create(){
        // $this->slider           = new Slider();
        // $this->slider->clickable= FALSE;

        // $this->editMode         = FALSE;
        $this->dispatchBrowserEvent('showModalDashboard');
    }

}
