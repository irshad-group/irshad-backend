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
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 220);
            $table->string('title_ar', 220);
            $table->string('title_kr', 300);
            $table->text('descr_en');
            $table->text('descr_ar');
            $table->text('descr_kr');
            $table->integer('v_order')->comment('vertical order'); // vertical order
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
        Schema::dropIfExists('faq');
    }
};
