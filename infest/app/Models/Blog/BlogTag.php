<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogTag extends Model{
    use HasFactory;

    public function blog() : BelongsToMany {
        return $this->BelongsToMany(Blog::class, 'blog_tag_relations');
    }

}
