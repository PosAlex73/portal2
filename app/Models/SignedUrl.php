<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignedUrl extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'time_life',
        'url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
