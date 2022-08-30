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
        Schema::create('directorates_prov', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar', 300);
            $table->string('title_en', 300);
            $table->string('title_kr', 300);
            $table->integer('province_id');
            $table->string('gps_lat');
            $table->string('gps_lon');
            $table->string('address');
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
        Schema::dropIfExists('directoraties_prov');
    }
};
