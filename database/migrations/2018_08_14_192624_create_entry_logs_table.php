<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('role');
            $table->string('description');
            $table->integer('card_key')->unsigned()->unique();
            $table->integer('uwi_id')->unsigned()->unique();
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('entry_logs');
    }
}
