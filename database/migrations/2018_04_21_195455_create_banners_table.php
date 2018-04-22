<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('title_vi')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->mediumText('description_vi')->nullable();
            $table->mediumText('description_en')->nullable();
            $table->mediumText('link_vi')->nullable();
            $table->mediumText('link_en')->nullable();
            $table->string('image')->nullable();
            $table->string('position');
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
        Schema::dropIfExists('banners');
    }
}
