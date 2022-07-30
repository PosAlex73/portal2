<?php

namespace App\Models;

use App\Enums\System\PathTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Pathnote extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'type'
    ];

    public function scopeBugs(Builder $builder)
    {
        return $builder->where('type', PathTypes::BUG);
    }

    public function scopeFeature(Builder $builder)
    {
        return $builder->where('type', PathTypes::FEATURE);
    }

    public function scopeFix(Builder $builder)
    {
        return $builder->where('type', PathTypes::FIX);
    }
}
