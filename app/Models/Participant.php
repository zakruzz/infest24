<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Participant extends Model
{
    use HasFactory;

    protected $table = "participants";

    protected $fillable = [
        "user_id",
        "name",
        "no_wa",
        "institusi",
        "type",
        "tema",
    ];

    public function user() : HasOne{
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // public function tags() : BelongsToMany{
    //     return $this->belongsToMany(BlogTag::class, 'blog_tag_relations');
    // }

    // public function comments() : HasMany{
    //     return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    // }

    // public function views() : HasMany{
    //     return $this->hasMany(WebsiteVisitor::class, 'blog_id', 'id');
    // }
}
