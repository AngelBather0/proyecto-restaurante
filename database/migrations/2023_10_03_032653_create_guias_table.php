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
        Schema::create('guias', function (Blueprint $table) {
            $table->string('Nombre', 100)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->string('Idiomas', 200)->nullable();
            $table->text('Experiencias')->nullable();
            $table->string('Imagen', 200)->nullable();
            $table->boolean('Estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guias');
    }
};
