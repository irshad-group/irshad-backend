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
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 220);
            $table->string('title_ar', 220);
            $table->string('title_kr', 300);
            $table->string('descr_en', 300);
            $table->string('descr_ar', 300);
            $table->string('descr_kr', 300);
            $table->string('img', 256);
            $table->string('url', 256);
            $table->integer('v_order')->comment('vertical order'); // vertical order
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
        Schema::dropIfExists('slider');
    }
};
