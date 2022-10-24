<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('name');    
            $table->foreignId('user_id');        
            $table->timestamp('starts')->nullable();
            $table->timestamp('stops')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_attendances');
    }
};
