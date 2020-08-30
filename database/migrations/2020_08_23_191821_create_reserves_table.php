<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cast');
            $table->string('kiboubi');
            $table->string('time');
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('course');
            $table->string('basyo')->nullable();
            $table->string('ekimei')->nukkabke();
            $table->string('contents');
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
        Schema::dropIfExists('reserves');
    }
}
