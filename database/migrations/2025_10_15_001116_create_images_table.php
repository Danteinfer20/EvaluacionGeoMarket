<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url_image')->nullable();
            $table->bigInteger('imageable_id')->nullable();
            $table->string('im_', 255)->nullable();
            
            $table->unsignedBigInteger('fk_User_id')->nullable();
            $table->foreign('fk_User_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('fk_Seller_id')->nullable();
            $table->foreign('fk_Seller_id')->references('id')->on('sellers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
};
