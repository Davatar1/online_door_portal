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
    {   Schema::dropIfExists('doors');
        Schema::create('doors', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('event');
<<<<<<< HEAD
            $table->string('event_outcome')->nullable();
            $table->integer('entity_id')->nullable();
=======
            $table->string('event outcome');
            $table->string('card_key')->unique();
            $table->string('uwi_id')->unique()->nullable();
            $table->string('name');
>>>>>>> 2d2b354c545975ba92c93eb4abdc4c901b0e4fd6
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
