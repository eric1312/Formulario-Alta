<?php

// Esta migración original queda desactivada porque se duplicaba con
// otra migración que contiene la definición correcta de la tabla `customers`.
// Se deja como no-op para evitar errores al ejecutar las migraciones.

use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    public function up(): void
    {
        /*
         * Intentionally left empty because this migration was disabled to avoid
         * duplicating the real migration that defines the `customers` table.
    public function down(): void
    {
        /*
         * Intentionally left empty because this migration was disabled to avoid
         * duplicating the real migration that defines the `customers` table.
         * Keeping a no-op method preserves migration order without performing any action.
         */
    }
    public function down(): void
    {
        // no-op
    }
}
