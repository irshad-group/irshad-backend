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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('strkey', 32);
            $table->mediumText('strval_en');
            $table->mediumText('strval_ar');
            $table->mediumText('strval_kr');
            $table->integer('created_by_id');
            $table->string('title', 120);
            $table->tinyInteger('no_trans')->comment('No translation required like: phone and email'); // No translation required like: phone and email
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
        Schema::dropIfExists('settings');
    }
};
