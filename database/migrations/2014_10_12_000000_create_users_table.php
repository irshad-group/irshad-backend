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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username');
            $table->string('full_name');
            $table->integer('profile_id')->comment('0: End users, 1: Moderators, 2: Admins'); //0: End users, 1: Moderators, 2: Admins
            $table->string('profile_pic');
            $table->string('job_title');
            $table->string('last_login');
            $table->string('last_login_ip');
            $table->text('token');
            $table->string('salt');
            $table->string('fb_token');
            $table->string('fb_id');
            $table->string('google_token');
            $table->integer('created_by_id'); // User Id
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
        Schema::dropIfExists('users');
    }
};
