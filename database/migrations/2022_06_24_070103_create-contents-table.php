<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('content_id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('video');
            $table->string('audio')->nullable();
            $table->string('genre');
            $table->string('language');
            $table->string('country');
            $table->string('release_date');
            $table->string('runtime');
            $table->string('director');
            $table->string('cast');
            $table->bigInteger('person_id')->unsigned();
            $table->foreign('person_id')->references('person_id')->on('persons');
            
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
        //
    }
}
