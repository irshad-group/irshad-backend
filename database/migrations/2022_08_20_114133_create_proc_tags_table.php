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
        Schema::create('proc_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('proc_id');
            $table->string('tag_val', 64);
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
        Schema::dropIfExists('proc_tags');
    }
};
