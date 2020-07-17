<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('profileid');
            $table->integer('userid');
            $table->string('FavName');
            $table->integer('IsDefault');
            $table->string('Country');
            $table->string('State');
            $table->string('City');
            $table->string('Volume');
            $table->string('Pressure');
            $table->string('Power');
            $table->string('Volts');
            $table->string('Hertz');
            $table->string('Phase');
            $table->string('Temperature');
            $table->string('Elevation');
            $table->string('Density');
            $table->string('DistanceFFan');
            $table->string('Q');
            $table->string('FanModels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
