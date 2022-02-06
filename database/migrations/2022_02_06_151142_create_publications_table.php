<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('profile');
            $table->string('firstname2');
            $table->string('lastname2');
            $table->string('firstname3');
            $table->string('lastname3');
            $table->string('firstname4');
            $table->string('lastname4');
            $table->string('topic');
            $table->string('keywords');
            $table->string('month');
            $table->string('year');
            $table->string('pages');
            $table->string('volume');
            $table->string('number');
            $table->string('abstract');
            $table->string('article');
            $table->string('article_number');
            $table->integer('view');
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
        Schema::dropIfExists('publications');
    }
}
