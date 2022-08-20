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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 64);
            $table->string('title_ar', 64);
            $table->string('title_kr', 64);
            $table->string('logo', 200);
            $table->string('url', 200);
            $table->integer('v_order')->comment('vertical order'); // vertical order
            $table->integer('location');
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
        Schema::dropIfExists('partners');
    }
};
