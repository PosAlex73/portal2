<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'text', 'image', 'status', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function getShortDescriptionAttribute()
    {
        return substr($this->text, 0, 30) . '...';
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments()->count();
    }

    public function scopeSearchText(Builder $builder, string $text)
    {
        return $builder->where('title', 'LIKE', "%{$text}%")->orWhere('text', 'LIKE', "%{$text}%");
    }
}
