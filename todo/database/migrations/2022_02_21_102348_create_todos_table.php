<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Mime\Encoder\ContentEncoderInterface;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('contenuto');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('todos');
    }
};
