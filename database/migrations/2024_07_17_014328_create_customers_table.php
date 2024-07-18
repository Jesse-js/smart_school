<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 150);
            $table->string('phone', 15);
            $table->string('state', 50)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('number', 10)->nullable();
            $table->char('zip', 9)->nullable();
            $table->date('birthdate')->nullable();
            $table->char('cpf', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
