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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 128);
            $table->string('title_ar', 128);
            $table->string('title_kr', 128);
            $table->string('thumb_img', 128);
            $table->string('img', 128);
            $table->integer('v_order')->comment('vertical order'); // vertical order
            $table->string('job_title_en', 128)->nullable();
            $table->string('job_title_ar', 128)->nullable();
            $table->string('job_title_kr', 128)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('bio_en', 200)->nullable();
            $table->string('bio_ar', 200)->nullable();
            $table->string('bio_kr', 200)->nullable();
            $table->tinyInteger('location');
            $table->tinyInteger('enabled');
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
        Schema::dropIfExists('team');
    }
};
