<?php

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string(UserSettingTypes::STATUS, 1)->default(CommonStatuses::ACTIVE);
            $table->string(UserSettingTypes::GET_BLOG_NOTIFICATIONS, 1)->default(CommonStatuses::ACTIVE);
            $table->string(UserSettingTypes::GET_NOTIFICATIONS, 1)->default(CommonStatuses::ACTIVE);
            $table->string(UserSettingTypes::GET_REVIEW_NOTIFICATIONS, 1)->default(CommonStatuses::ACTIVE);
            $table->string(UserSettingTypes::GET_NEWS_NOTIFICATIONS, 1)->default(CommonStatuses::ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_settings');
    }
};
