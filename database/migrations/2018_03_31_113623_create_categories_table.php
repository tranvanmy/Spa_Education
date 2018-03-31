<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            // Vi
            $table->string('title_vi')->nullable();
            $table->string('slug_vi')->nullable();
            $table->mediumText('description_vi')->nullable();
            $table->string('seo_keyword_vi')->nullable();
            $table->string('seo_description_vi')->nullable();

            // En
            $table->string('title_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->mediumText('description_en')->nullable();
            $table->string('seo_keyword_en')->nullable();
            $table->string('seo_description_en')->nullable();

            $table->string('type');
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
        Schema::dropIfExists('categories');
    }
}
