<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableCourse extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('author_id');
            $table->integer('instructor_id');
            $table->string('image_url')->nullable();

            $table->string('level_vi')->nullable();
            $table->string('level_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('instructor_id');

            $table->integer('author_id');
            $table->dropColumn('image_url');
            $table->dropColumn('level_vi');
            $table->dropColumn('level_en');
        });
    }
}
