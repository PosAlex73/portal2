<?php

use App\Enums\CommonStatuses;
use App\Enums\ImageTypes;
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
        Schema::create('images', function (Blueprint $schema) {
            $schema->id();
            $schema->string('title', 255);
            $schema->string('path', 2048);
            $schema->string('type', 1)->default(ImageTypes::COMMON);
            $schema->string('status', 1)->default(CommonStatuses::ACTIVE);
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
        Schema::dropIfExists('images');
    }
};
