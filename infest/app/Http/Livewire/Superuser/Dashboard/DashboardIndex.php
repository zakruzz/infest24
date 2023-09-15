<?php

namespace App\Http\Livewire\Superuser\Dashboard;

use Livewire\Component;

class DashboardIndex extends Component{

    public function render(){
        return view('livewire.superuser.dashboard.dashboard-index')
            ->extends('layouts.superuser.app')->section('content');
    }

}
