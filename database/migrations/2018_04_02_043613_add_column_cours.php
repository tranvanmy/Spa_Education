<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCours extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('author_id');
            $table->string('level_vi')->nullable()->after('detail_vi');
            $table->string('level_en')->nullable()->after('detail_en');
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
            $table->dropColumn('image_url');
            $table->dropColumn('level_vi');
            $table->dropColumn('level_en');
        });
    }
}
