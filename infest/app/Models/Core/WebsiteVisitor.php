<?php

namespace App\Models\Core;

use App\Models\Blog\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebsiteVisitor extends Model{
    use HasFactory;

    public function blog() : BelongsTo {
        return $this->belongsTo(Blog::class, 'id');
    }

}
