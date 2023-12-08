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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique(); // Agregado para el correo electrónico
            $table->string('city');
            $table->string('country');
            $table->string('summary');
            $table->json('frameworks'); // Agregado para almacenar el arreglo de frameworks
            $table->json('hobbies'); // Agregado para almacenar el arreglo de hobbies
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
