<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfid');
            $table->string('description');
<<<<<<< HEAD:database/migrations/2018_08_16_184426_create_cards_table.php
            $table->integer("facilty_code_id");
=======
            $table->string('card_key')->unique();
            $table->string('uwi_id')->unique()->nullable();
            $table->date('date');
            $table->time('time');
>>>>>>> 2d2b354c545975ba92c93eb4abdc4c901b0e4fd6:database/migrations/2018_08_14_192624_create_entry_logs_table.php
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
        Schema::dropIfExists('cards');
    }
}
