<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranjaDisponibleSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franja_disponible_salons', function (Blueprint $table) {
            $table->increments('IDFRANJA');
            $table->string("NUMEROFRANJA");
            $table->string('NUMEROSALON');
            $table->foreign('NUMEROSALON')->references('NUMEROSALON')->on('salons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franja_disponible_salons');
    }
}
