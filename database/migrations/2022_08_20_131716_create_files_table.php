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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar', 300);
            $table->string('title_en', 300);
            $table->string('title_kr', 300);
            $table->integer('filesize')->comment('in MB'); // in MB
            $table->string('path', 400);
            $table->integer('dest_type')->comment('0: Proc, 2: Proc Items'); // 0: Proc, 2: Proc Items
            $table->integer('dest_id');
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
        Schema::dropIfExists('files');
    }
};
