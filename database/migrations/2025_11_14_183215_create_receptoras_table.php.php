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
    Schema::create('receptoras', function (Blueprint $table) {
        $table->id();
        $table->foreignId('softguard_account_id')->nullable()->constrained('softguard_accounts')->onDelete('set null');
        $table->string('marca')->nullable();
        $table->string('modelo')->nullable();
        $table->string('puerto')->nullable();
        $table->string('ip')->nullable();
        $table->string('observaciones')->nullable();
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
