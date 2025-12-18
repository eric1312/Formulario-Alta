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
    Schema::create('softguard_accounts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        $table->string('numero_cuenta')->nullable();
        $table->string('direccion_monitoreada')->nullable();
        $table->text('zonas')->nullable(); // JSON o texto con zonas
        $table->string('panel_protocolo')->nullable();
        $table->string('estado')->default('activo');
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
