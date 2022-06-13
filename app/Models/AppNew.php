<?php

namespace App\Models;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AppNew extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'image'
    ];

    protected $attributes = [
        'status' => CommonStatuses::ACTIVE,
        'image' => ''
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::substr($this->description, 0, 30) . '...';
    }
}
