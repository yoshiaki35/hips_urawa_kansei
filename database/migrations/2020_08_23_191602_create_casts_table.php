<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('age');
            $table->string('size1');
            $table->string('size2');
            $table->bigInteger('tag1_id');
            $table->bigInteger('tag2_id');
            $table->bigInteger('icon1_id');
            $table->bigInteger('icon2_id');
            $table->bigInteger('open_time_id');
            $table->bigInteger('last_time_id');
            $table->text('coment1');
            $table->text('coment2');
            $table->string('image_url1');
            $table->string('image_url2');
            $table->string('image_url3');
            $table->string('image_url4');
            $table->string('image_url5');
            $table->string('image_url6');
            $table->string('image_url7');
            $table->bigInteger('bloodltype_id');
            $table->string('goingtowork');
            $table->string('personality');
            $table->string('sorm');
            $table->string('cigarettes');
            $table->bigInteger('kenmei_id');
            $table->string('goodplay');
            $table->string('charmpoint');
            $table->string('hobbies_skills');
            $table->string('favoriteoppositesextype');
            $table->string('whatIwantmostnow');
            $table->bigInteger('option1_id');
            $table->bigInteger('option2_id');
            $table->bigInteger('option3_id');
            $table->bigInteger('option4_id');
            $table->bigInteger('option5_id');
            $table->bigInteger('option6_id');
            $table->bigInteger('option7_id');
            $table->bigInteger('option8_id');
            $table->bigInteger('option9_id');
            $table->bigInteger('option10_id');
            $table->bigInteger('option11_id');
            $table->bigInteger('option12_id');
            $table->bigInteger('option13_id');
            $table->bigInteger('option14_id');
            $table->bigInteger('option15_id');
            $table->bigInteger('option16_id');
            $table->string('schedule1');
            $table->string('schedule2');
            $table->string('schedule3');
            $table->string('schedule4');
            $table->string('schedule5');
            $table->string('schedule6');
            $table->string('schedule7');
            $table->bigInteger('dto_id');
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
        Schema::dropIfExists('casts');
    }
}
