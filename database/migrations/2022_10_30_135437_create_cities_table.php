<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_code', 3)->index('cities_department_code_foreign');
            $table->string('insee_code', 5)->nullable();
            $table->string('zip_code', 5)->nullable();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->double('gps_lat', 16, 14);
            $table->double('gps_lng', 17, 14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
