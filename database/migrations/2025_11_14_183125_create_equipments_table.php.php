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
    Schema::create('equipments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null');
        $table->foreignId('softguard_account_id')->nullable()->constrained('softguard_accounts')->onDelete('set null');
        $table->string('marca')->nullable();
        $table->string('modelo')->nullable();
        $table->string('numero_serie')->nullable()->unique();
        $table->string('estado')->default('operativo');
        $table->text('observaciones')->nullable();
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
