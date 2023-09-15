<?php

namespace App\Models\Client;

use App\Models\Project\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model{
    use HasFactory;

    public function projects(): BelongsTo{
        return $this->belongsTo(Project::class, 'id');
    }

    public function getImageUrl(){
        return asset("storage/client/{$this->image}");
    }

}
