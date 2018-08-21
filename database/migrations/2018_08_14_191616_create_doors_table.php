<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  // Schema::dropIfExists('doors');
        Schema::create('doors', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('event');
            $table->string('event_outcome')->nullable();
<<<<<<< HEAD
            $table->integer('entity_id')->nullable();
=======
            $table->string('user_id')->nullable();
>>>>>>> ecb2877bfdb8758d15acb0b6ac662d52bc38147c
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
        Schema::dropIfExists('doors');
    }
}
