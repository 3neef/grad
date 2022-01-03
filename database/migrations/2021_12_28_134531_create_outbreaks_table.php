<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutbreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbreaks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('address')->nullable();
            $table->string('latitude', 15)->nullable();
            $table->string('longitude', 15)->nullable();
            $table->unsignedInteger('creator_id');
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
        Schema::dropIfExists('outbreaks');
    }
}
