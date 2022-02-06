<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('keyword');
            $table->string('paper_type');
            $table->string('article_file');
            $table->string('abstract');
            $table->string('article');
            $table->string('cover_latter');
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->string('submission_number')->nullable();
            $table->string('reviewer_1')->nullable();
            $table->string('reviewer_2')->nullable();
            $table->string('reviewer_3')->nullable();
            $table->dateTime('reviewer_date1')->nullable();
            $table->dateTime('reviewer_date2')->nullable();
            $table->dateTime('reviewer_date3')->nullable();
            $table->string('report_1')->nullable();
            $table->string('report_2')->nullable();
            $table->string('report_3')->nullable();
            $table->string('complete_report')->nullable();
            $table->string('revised_copy')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
