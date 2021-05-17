<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devotions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('bible_reading');
            $table->string('story');
            $table->string('audio');
            $table->string('release_date');
            $table->string('thumbnail');
            $table->string('publish');
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
        Schema::dropIfExists('devotions');
    }
}
