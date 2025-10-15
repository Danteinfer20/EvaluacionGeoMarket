<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chat_support', function (Blueprint $table) {
            $table->id();
            $table->text('mensaje');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamp('fecha_mensaje');
            $table->boolean('atendido');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_support');
    }
};