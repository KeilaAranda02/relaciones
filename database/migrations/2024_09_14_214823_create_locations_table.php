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
        //una localizacion pertenece a un perfil
        //un usario tiene a tarves de un perfil  una localizacion
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id')->unsigned();
            $table-> string('country');//pais,ciudad
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
