<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'type',
        'status',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function taskReviews()
    {
        return $this->hasMany(TaskReview::class);
    }

    public function thread()
    {
        return $this->hasOne(Thread::class);
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function courses()
    {
        return $this->hasMany(UserProgress::class);
    }

    public function settings()
    {
        return $this->hasOne(UserSetting::class);
    }

    public function progress()
    {
        return $this->hasOne(UserProgress::class);
    }

    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->lastname);
    }
}
