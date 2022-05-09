<?php

namespace App\Models;

use Orchid\Platform\Models\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'type',
        'status',
        'email',
        'password',
        'permissions'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'first_name',
        'last_name',
        'type',
        'status',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'first_name',
        'last_name',
        'type',
        'status',
        'updated_at',
        'created_at',
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
