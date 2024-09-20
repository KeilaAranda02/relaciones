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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            //un comentario pertenece a un usuario. fue creado por un usuario
            $table->bigInteger('user_id')->unsigned();

            //aqui se redacta el comentario
            //un comentario puede escribirse en un video o en un post
            $table->text('body');

            //polimorfismo
            $table->morphs('commeentable');
    
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
