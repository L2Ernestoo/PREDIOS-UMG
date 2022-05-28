<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreignId('navieras_id')->constrained('navieras');
            $table->foreignId('predios_id')->constrained('predios');
            $table->foreignId('camiones_id')->constrained('camiones');
            $table->foreignId('estatus_id')->constrained('estatus_servicios');
            $table->foreignId('pilotos_id')->constrained('pilotos');
            $table->foreignId('users_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios', function (Blueprint $table) {
            //
        });
    }
}
