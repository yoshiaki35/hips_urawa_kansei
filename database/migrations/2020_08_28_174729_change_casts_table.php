<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casts', function (Blueprint $table) {
            $table->bigInteger('open_time_id')->nullable()->change();
            $table->bigInteger('last_time_id')->nullable()->change();
            $table->string('image_url1')->millable()->change();
            $table->string('image_url2')->millable()->change();
            $table->string('image_url3')->millable()->change();
            $table->string('image_url4')->millable()->change();
            $table->string('image_url5')->millable()->change();
            $table->string('image_url6')->millable()->change();
            $table->string('image_url7')->millable()->change();
            $table->string('movie')->millable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casts', function (Blueprint $table) {
            //
        });
    }
}
