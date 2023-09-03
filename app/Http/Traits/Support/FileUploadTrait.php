<?php

namespace App\Http\Traits\Support;

use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;
use PHPUnit\Exception;

trait FileUploadTrait{
    use WithFileUploads;

    public function uploadFile($dir, $file, $type){
        try {

            $dateTime   = date('dmY_his');
            $fileExt    = $file->extension();
            $fileName   = "{$type}_{$dateTime}.{$fileExt}";

            $file->storeAs($dir, $fileName);

            return $fileName;

        }catch (Exception $exception){
            insert_errorlog('Upload File', $exception->getMessage());
            return 0;
        }
    }

}
