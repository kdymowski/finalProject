<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password');
            $table->string('userType');
            $table->string('firstName');
            $table->string('lastName');
<<<<<<< HEAD
            $table->string('language1');
            $table->string('language2');
            $table->string('language3');
            $table->string('teamStyle1');
            $table->string('teamStyle2');
            $table->string('teamStyle3');
=======
            $table->string('language');
            $table->string('class');
            $table->string('bio');
            $table->string('teamStyle');
>>>>>>> a31a7095fee6b1b609f76cb848993f1e8ba1ba58
            $table->string('email')->unique();
            $table->string('updated_at');
            $table->string('created_at');
            $table->string('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
