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
        Schema::create('pathnotes', function (Blueprint $schema) {
            $schema->id();
            $schema->text('description');
            $schema->string('type', 1)->default(\App\Enums\System\PathTypes::BUG);
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
        Schema::dropIfExists('pathnotes');
    }
};
