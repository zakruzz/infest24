<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteConfiguration extends Model{
    use HasFactory;

    public function underMaintenance(): bool{
        return $this->status == 'MAINTENANCE';
    }

    public function getPhoneNumberFormatted(){
        if(  preg_match( '/^(\d{2})(\d{3})(\d{4})(\d{4})$/', $this->phone_number,  $matches ) ) {
            return "(+{$matches[1]}) {$matches[2]}-{$matches[3]}-{$matches[4]}";
        }
    }

}
