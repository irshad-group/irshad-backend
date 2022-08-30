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
        Schema::create('ministries', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 256);
            $table->string('title_ar', 256);
            $table->string('title_kr', 256);
            $table->string('logo', 256);
            $table->integer('krg');
            $table->string('address', 256);
            $table->string('gps_lat', 256);
            $table->string('gps_lon', 256);
            $table->string('website', 200);
            $table->integer('created_by');
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
        Schema::dropIfExists('ministries');
    }
};
