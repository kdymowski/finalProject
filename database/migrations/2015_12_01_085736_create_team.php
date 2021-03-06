<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamName');
            $table->string('teamType');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
    */
    public function down()
    {
        //Schema::drop('team');
    }
}
