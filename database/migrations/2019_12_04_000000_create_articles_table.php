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
            $table->bigIncrements('id');
            $table->string('name_ro')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->text('text_ro')->nullable();
            $table->text('text_ru')->nullable();
            $table->text('text_en')->nullable();
            $table->text('meta_title_ro')->nullable();
            $table->text('meta_title_ru')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_keywords_ro')->nullable();
            $table->text('meta_keywords_ru')->nullable();
            $table->text('meta_keywords_en')->nullable();
            $table->text('meta_description_ro')->nullable();
            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('photo')->nullable();
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
