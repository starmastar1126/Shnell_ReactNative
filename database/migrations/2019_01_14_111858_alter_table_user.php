<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (Blueprint $table){
            $table->string('last_name');
            $table->string('company');
            $table->string('region');
            $table->string('street_1 ');
            $table->string('street_2');
            $table->string('country');
            $table->string('state');
            $table->string('postal_code');
            $table->string('office Phone');
            $table->string('cell');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
