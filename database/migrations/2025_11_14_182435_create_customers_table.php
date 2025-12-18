<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_fantasia');
        $table->string('cuit_dni')->nullable();
        $table->string('razon_social')->nullable();
        $table->string('direccion')->nullable();
        $table->string('localidad')->nullable();
        $table->string('provincia')->nullable();
        $table->string('email_admin')->nullable();
        $table->string('telefono_admin')->nullable();
        $table->boolean('tiene_movil_verificador')->default(false);
        $table->string('email_config_dealer')->nullable();
        $table->string('telefono_config_dealer')->nullable();
        $table->text('comunicadores_puertos')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
