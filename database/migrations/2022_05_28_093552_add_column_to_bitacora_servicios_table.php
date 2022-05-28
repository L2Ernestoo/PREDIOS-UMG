<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToBitacoraServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bitacora_servicios', function (Blueprint $table) {
            $table->foreignId('servicios_id')->constrained('servicios');
            $table->foreignId('estatus_servicios_id')->constrained('estatus_servicios');
            $table->foreignId('predios_id')->constrained('predios');
            $table->foreignId('users_id')->constrained('users'); //Quien lo registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bitacora_servicios', function (Blueprint $table) {
            //
        });
    }
}
