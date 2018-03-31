<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');

            // Vi
            $table->string('title_vi')->nullable();
            $table->string('slug_vi')->nullable();
            $table->mediumText('description_vi')->nullable();
            $table->text('detail_vi')->nullable();
            $table->boolean('has_vi')->default(false);
            $table->string('seo_keyword_vi')->nullable();
            $table->string('seo_description_vi')->nullable();

            // En
            $table->string('title_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->mediumText('description_en')->nullable();
            $table->text('detail_en')->nullable();
            $table->boolean('has_en')->default(false);
            $table->string('seo_keyword_en')->nullable();
            $table->string('seo_description_en')->nullable();

            // Share beetween languages
            $table->string('image_url')->nullable();
            $table->float('point_review_manual')->default(5);
            $table->integer('total_review_manual')->default(0);
            $table->boolean('is_review_manual')->defalut(true);
            $table->float('point_review_avg')->default(0);
            $table->integer('total_review')->default(0);
            $table->integer('viewed')->default(0);
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
        Schema::dropIfExists('products');
    }
}
