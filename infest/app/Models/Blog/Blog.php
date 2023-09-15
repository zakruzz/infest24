<?php

namespace App\Models\Blog;

use App\Models\Core\WebsiteVisitor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model{
    use HasFactory;

    public function category() : HasOne{
        return $this->hasOne(BlogCategory::class, 'id', 'blog_category_id');
    }

    public function tags() : BelongsToMany{
        return $this->belongsToMany(BlogTag::class, 'blog_tag_relations');
    }

    public function comments() : HasMany{
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }

    public function views() : HasMany{
        return $this->hasMany(WebsiteVisitor::class, 'blog_id', 'id');
    }

    public function getDateFormatted($format){
        return Carbon::make($this->created_at)->format($format);
    }

    public function getImageUrl(){
        return asset("storage/blog/{$this->image}");
    }

}
