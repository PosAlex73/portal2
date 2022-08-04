<?php

use App\Enums\Achivements\AchievementTypes;
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
        Schema::create('achievements', function (Blueprint $schema) {
            $schema->id();
            $schema->string(255);
            $schema->text('description');
            $schema->unsignedBigInteger('user_id');
            $schema->string('type', 1)->default(AchievementTypes::COMMON);
            $schema->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $schema->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
};
