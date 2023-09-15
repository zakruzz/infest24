<?php

namespace App\Http\Livewire\Superuser\Statistics;

use Livewire\Component;

class StatisticVisitor extends Component{

    public function render(){
        return view('livewire.superuser.statistics.statistic-visitor')
            ->extends('layouts.superuser.app')->section('content');
    }

}
