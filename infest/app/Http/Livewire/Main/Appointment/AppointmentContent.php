<?php

namespace App\Http\Livewire\Main\Appointment;

use App\Models\Data\Appointment;
use App\Models\Data\Doctor;
use App\Models\Service\MedicalScheduleService;
use Illuminate\Support\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AppointmentContent extends Component{
    use LivewireAlert;

    public $rules   = [
        'appointment.name'          => 'required|min:3',
        'appointment.email'         => 'required|email|min:3',
        'appointment.phone_number'  => 'required|numeric|min:10',
        'appointment.complaint'     => 'nullable',
        'appointment.note'          => 'nullable',
    ];

    public $days    = [
        'Mon' => 'MON', 'Tue' => 'TUE',
        'Wed' => 'WED', 'Thu' => 'THU',
        'Fri' => 'FRI', 'Sat' => 'SAT',
        'Sun' => 'SUN',
    ];

    public $doctor;
    public $medicalService, $medicalSchedule;
    public $appointment;

    public $currentDay;

    public $currentStep     = 1;
    public $firstStep       = 1;
    public $lastStep        = 3;
    public $finalStep       = 4;

    protected $listeners = [
        'confirmFinishStep',
    ];

    public function mount($slug){
        if (!$doctor = Doctor::where('slug', $slug)->first()) return abort(404);
        $this->doctor           = $doctor;

        $this->appointment      = new Appointment();
        $this->medicalService   = $doctor->medicalService;
        $this->currentDay       = $this->days[Carbon::now()->format('D')];
    }

    public function selectMedicalSchedule($id){
        if ($schedule = MedicalScheduleService::find($id)){
            $this->medicalSchedule      = $schedule;
            $this->nextStep();
        }else{
            return $this->alert('error', 'Terjadi kesalahan, lakukan refresh pada halaman ini');
        }
    }

    public function nextStep(){
        if ($this->currentStep != $this->lastStep){
            if ($this->validationStep($this->currentStep)){
                $this->currentStep++;
            }
        }
    }

    public function previousStep(){
        if ($this->currentStep != $this->firstStep){
            $this->currentStep--;
        }
    }

    public function validationStep($step){
        if ($step == 1){
            return TRUE;
        }else if ($step == 2){
            return $this->validate();
        }
    }

    public function finishStep(){
        $this->confirm('Konfirmasi janji temu dokter?', [
            'onConfirmed' => 'confirmFinishStep',
        ]);
    }

    public function confirmFinishStep(){
        try {

            $this->appointment->doctor_id           = $this->doctor->id;
            $this->appointment->medical_service_id  = $this->medicalService->id;
            $this->appointment->medical_type_id     = 1;
            $this->appointment->medical_schedule_id = $this->medicalSchedule->id;
            $this->appointment->code                = rand(000000, 999999);
            $this->appointment->save();

            $this->currentStep                      = $this->finalStep;

        }catch (\Exception $exception){
            insert_errorlog('Store Appointment', $exception->getMessage());
            return $this->alert('error', 'Terjadi kesalahan, mohon tunggu beberapa saat');
        }
    }



    public function render(){
        $data['medicalSchedules']           = $this->doctor->medicalSchedules()
            ->where('day', $this->currentDay)->get();

        return view('livewire.main.appointment.appointment-content', $data)
            ->extends('layouts.main.app')->section('content');
    }
}
