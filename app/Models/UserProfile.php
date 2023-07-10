<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'contacted_email',
        'age',
        'country',
        'experience',
        'about',
        'user_id'
    ];

    protected $attributes = [
        'phone' => '',
        'contacted_email' => '',
        'age' => '',
        'country' => '',
        'experience' => '',
        'about' => '',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
