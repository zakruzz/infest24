<?php

namespace App\Models\Blog;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogComment extends Model{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'name',
        'comment',
        'is_anonymous',
    ];

    public function blog() : BelongsTo {
        return $this->belongsTo(Blog::class, 'id');
    }

    public function getNameComment(){
        $strings        = explode(' ', $this->name);

        $result         = '';

        foreach ($strings as $string) {
            $count = strlen($string);
            $result .= substr_replace($string, str_repeat('*', $count), 1, $count) . ' ';
        }

        return $this->is_anonymous ? $result : $this->name;
    }

    public function getDateFormatted(){
        return Carbon::make($this->created_at)->format('d M, Y - H:i');
    }

}
