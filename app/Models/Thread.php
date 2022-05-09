<?php

namespace App\Models;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => CommonStatuses::ACTIVE
    ];

    protected $fillable = [
        'user_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(ThreadMessage::class);
    }
}
