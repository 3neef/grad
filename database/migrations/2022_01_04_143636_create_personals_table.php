<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');
            $table->string('fname');
            $table->string('lname');
            $table->integer('age');
            $table->string('mname');
            $table->string('phone');
            $table->string('gender');
            $table->string('passport')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('adress');
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
        Schema::dropIfExists('personals');
    }
}
