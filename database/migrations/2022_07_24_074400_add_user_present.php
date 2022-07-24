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
        Schema::create('presents', function (Blueprint $schema) {
            $schema->id();
            $schema->string('title', 255);
            $schema->text('description');
            $schema->text('data');
            $schema->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('presents');
    }
};
