<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100);
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('restrict');
            
            $table->boolean('activo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};