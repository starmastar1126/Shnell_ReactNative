<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('projectsid');
            $table->integer('profileid');
            $table->string('ProjectNumber');
            $table->string('CustomerName');
            $table->string('ProjectName');
            $table->string('Company');
            $table->string('CompanyREP');
            $table->string('TagItem');
            $table->string('Service');
            $table->string('Quantity');
            $table->string('Elev');
            $table->string('Temp');                       
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
        Schema::dropIfExists('projects');
    }
}
