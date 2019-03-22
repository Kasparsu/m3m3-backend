<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meme_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meme_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('meme_id')->references('id')->on('memes');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('meme_tag');
    }
}
