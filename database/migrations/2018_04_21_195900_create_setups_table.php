<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linked_in')->nullable();

            $table->mediumText('title_vi')->nullable();
            $table->text('about_us_vi')->nullable();
            $table->string('about_us_link_vi')->nullable();
            $table->text('instructor_description_vi')->nullable();
            $table->text('rd_description_vi')->nullable();
            $table->text('partner_vi')->nullable();
            $table->text('event_vi')->nullable();
            $table->text('data_scientist_vi')->nullable();
            $table->text('join_us_vi')->nullable();
            $table->text('footer_vi')->nullable();
            $table->string('seo_keyword_vi')->nullable();
            $table->string('seo_description_vi')->nullable();

            $table->mediumText('title_en')->nullable();
            $table->text('about_us_en')->nullable();
            $table->string('about_us_link_en')->nullable();
            $table->text('instructor_description_en')->nullable();
            $table->text('rd_description_en')->nullable();
            $table->text('partner_en')->nullable();
            $table->text('event_en')->nullable();
            $table->text('data_scientist_en')->nullable();
            $table->text('join_us_en')->nullable();
            $table->text('footer_en')->nullable();
            $table->string('seo_keyword_en')->nullable();
            $table->string('seo_description_en')->nullable();


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
        Schema::dropIfExists('setups');
    }
}
