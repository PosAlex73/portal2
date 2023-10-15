<?php

use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Courses\CourseTypes;
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
        Schema::create('practice_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(true);
            $table->string('short_description', 512);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('image', 1024)->nullable(true)->default('');
            $table->integer('price')->default(0);
            $table->string('type', 1)->default(CourseTypes::FREE);
            $table->string('practice', 1)->default(CoursePractice::YES);
            $table->string('class', 512)->nullable(false);
            $table->string('status', 1)->default(CourseStatuses::IN_PROGRESS);
            $table->smallInteger('position')->nullable(true)->default(0);
            $table->string('slug');
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
        Schema::dropIfExists('practice_courses');
    }
};
