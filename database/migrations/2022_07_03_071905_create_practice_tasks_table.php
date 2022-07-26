<?php

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
        Schema::create('practice_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description');
            $table->text('data');
            $table->string('status', 1)->default(\App\Enums\CommonStatuses::DISABLED);
            $table->string('type', 32)->default(\App\Enums\Tasks\TaskTypes::THEORY);
            $table->integer('points')->default(0)->nullable(true);
            $table->unsignedBigInteger('practice_course_id');
            $table->foreign('practice_course_id')->references('id')->on('practice_courses')->cascadeOnDelete();
            $table->string('class', 512)->nullable(false);
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
        Schema::dropIfExists('practice_tasks');
    }
};
