<?php

namespace App\Models;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    protected $attributes = [
        UserSettingTypes::STATUS => CommonStatuses::ACTIVE,
        UserSettingTypes::GET_NOTIFICATIONS => CommonStatuses::ACTIVE,
        UserSettingTypes::GET_BLOG_NOTIFICATIONS => CommonStatuses::ACTIVE,
        UserSettingTypes::GET_REVIEW_NOTIFICATIONS => CommonStatuses::ACTIVE,
        UserSettingTypes::GET_NEWS_NOTIFICATIONS => CommonStatuses::ACTIVE
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->fillable = array_merge($this->fillable, UserSettingTypes::getKeysAsValues());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
