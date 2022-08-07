<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'status', 'position'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
