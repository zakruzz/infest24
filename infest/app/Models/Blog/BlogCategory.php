<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogCategory extends Model{
    use HasFactory;

    public function blog() : BelongsTo {
        return $this->belongsTo(Blog::class, 'id');
    }

}
