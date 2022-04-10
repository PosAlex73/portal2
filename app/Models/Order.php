<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'payment', 'total', 'data', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
