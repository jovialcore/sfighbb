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
            $table->text('bible_reading');
            $table->text('story');
            $table->string('audio');
            $table->date('release_date')->unique();
            $table->string('thumbnail');
            $table->string('small_thumbnail')->nullable();
            $table->string('smaller_thumbnail')->nullable();
            $table->boolean('publish');
            $table->integer('view_count')->nullable();
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
