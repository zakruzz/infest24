<?php

namespace App\Http\Livewire\Main\Appointment;

use App\Models\Data\Doctor;
use App\Models\Service\MedicalService;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentIndex extends Component{
    use WithPagination;
    use LivewireAlert;

    public $doctor, $medicalService;
    public $perPage         = 9;

    public function resetFilterDoctor(){
        $this->medicalService       = '';
    }

    public function filterMedicalService($id){
        $this->medicalService       = $id;
    }

    public function render(){

        $doctors                    = Doctor::query();

        if ($this->medicalService){
            $doctors->where('medical_service_id', $this->medicalService);
        }else{
            $doctors->orderBy('name', 'ASC');
        }

        $data['doctors']            = $doctors->paginate($this->perPage);
        $data['medicalServices']    = MedicalService::all();

        return view('livewire.main.appointment.appointment-index', $data)
            ->extends('layouts.main.app')->section('content');
    }

}
