<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_id', 'message', 'owner_id', 'status'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
