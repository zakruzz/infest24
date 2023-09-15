<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data\Appointment;
use App\Models\Data\Doctor;
use App\Models\Service\MedicalService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller{

    private $key = "11489af4a96ffc213b772b2215f75b87";

    public function getAppointments(Request $request) : JsonResponse{
        try {

            $token      = $request->bearerToken();

            if ($token) {

                if ($token == $this->key){

                    $appointments       = Appointment::whereIn('medical_service_id', $request->service_id)
                        ->where('status', '!=', 'SUCCESS')->where('status', '!=', 'FAILED')
                        ->latest()->get();

                    return Response::json([
                        'messages' => 'Success',
                        'data' => $appointments
                    ], 200);

                }else{
                    return Response::json([
                        'messages' => 'API Key Invalid'
                    ], 403);
                }

            }else{
                return Response::json([
                    'messages' => 'API Key Invalid'
                ], 403);
            }

        }catch (\Exception $exception){
            insert_errorlog('API Get Appointments', $exception->getMessage());
            return Response::json([
                'messages' => 'Internal Server Error'
            ], 500);
        }
    }

    public function getMedicalServices(Request $request) : JsonResponse{
        try {

            $token      = $request->bearerToken();

            if ($token) {

                if ($token == $this->key){

                    $medicalServices    = MedicalService::orderBy('name', 'ASC')->get();

                    return Response::json([
                        'messages' => 'Success',
                        'data' => $medicalServices
                    ], 200);

                }else{
                    return Response::json([
                        'messages' => 'API Key Invalid'
                    ], 403);
                }

            }else{
                return Response::json([
                    'messages' => 'API Key Invalid'
                ], 403);
            }

        }catch (\Exception $exception){
            insert_errorlog('API Get Medical Services', $exception->getMessage());
            return Response::json([
                'messages' => 'Internal Server Error'
            ], 500);
        }
    }

    public function getDoctors(Request $request) : JsonResponse{
        try {

            $token      = $request->bearerToken();

            if ($token) {

                if ($token == $this->key){

                    $doctors        = Doctor::orderBy('name', 'ASC')->get();

                    return Response::json([
                        'messages' => 'Success',
                        'data' => $doctors
                    ], 200);

                }else{
                    return Response::json([
                        'messages' => 'API Key Invalid'
                    ], 403);
                }

            }else{
                return Response::json([
                    'messages' => 'API Key Invalid'
                ], 403);
            }

        }catch (\Exception $exception){
            insert_errorlog('API Get Doctors', $exception->getMessage());
            return Response::json([
                'messages' => 'Internal Server Error'
            ], 500);
        }
    }


}
