<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorates', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 256);
            $table->string('title_ar', 256);
            $table->string('title_kr', 256);
            $table->string('logo');
            $table->integer('ministry_id');
            $table->string('address');
            $table->string('gps_lat');
            $table->string('gps_lon');
            $table->string('working_hours_ar', 300);
            $table->string('working_hours_en', 300);
            $table->string('working_hours_kr', 300);
            $table->string('website');
            $table->integer('created_by_id');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0); //DateTime with timezone
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directoraties');
    }
};
