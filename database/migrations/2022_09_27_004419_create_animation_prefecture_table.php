<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimationPrefectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animation_prefecture', function (Blueprint $table) {
            $table->primary(['animation_id','prefecture_id']);
            $table->unsignedBigInteger('animation_id');
            $table->foreign('animation_id')->references('id')->on('animations');
            $table->unsignedBigInteger('prefecture_id');
            $table->foreign('prefecture_id')->references('id')->on('prefectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animation_prefecture');
    }
}
