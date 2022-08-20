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
        Schema::create('proc', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 220);
            $table->string('title_ar', 220);
            $table->string('title_kr', 220)->nullable();
            $table->longText('descr_en', );
            $table->longText('descr_ar', );
            $table->longText('descr_kr', )->nullable();
            $table->integer('enabled');
            $table->integer('directorate_id',)->nullable();
            $table->string('shortname', 256)->nullable();
            $table->date('publish_date')->nullable();
            $table->timestamp('last_update');
            $table->integer('last_update_by');
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
        Schema::dropIfExists('proc');
    }
};
