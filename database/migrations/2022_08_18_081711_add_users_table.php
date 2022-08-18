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
        Schema::table('users', function (Blueprint $table) {
            $table->uuid();
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
            $table->integer('added_by'); // User Id
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
