<?php

namespace App\Models;

use App\Enums\CommonStatuses;
use App\Models\Traits\UseShortDesc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AppNew extends Model
{
    use HasFactory, UseShortDesc;

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

    public function scopeSearchText(Builder $builder, string $text)
    {
        return $builder->where('title', 'LIKE', "%{$text}%")->orWhere('description', 'LIKE', "{$text}");
    }
}
