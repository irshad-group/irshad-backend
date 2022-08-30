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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('msg', 500);
            $table->integer('dest_type')->comment('0: Proc, 1: Proc Item, 2: Directorate, 3: Ministry'); // 0: Proc, 1: Proc Item, 2: Directorate, 3: Ministry
            $table->integer('dest_id');
            $table->string('token', 256);
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
        Schema::dropIfExists('comments');
    }
};
