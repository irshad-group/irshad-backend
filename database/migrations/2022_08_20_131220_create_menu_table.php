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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('endpoint', 120);
            $table->tinyInteger('type')->comment('1:Main Item, 2: Sub item'); //1:Main Item, 2: Sub item
            $table->string('title_ar', 120);
            $table->string('title_en', 120);
            $table->string('title_kr', 120);
            $table->string('icon');
            $table->integer('parent');
            $table->integer('v_order')->comment('vertical order'); // vertical order
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
        Schema::dropIfExists('menu');
    }
};
