<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id();    
            $table->string('name');
        });

        Schema::create('invitation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employer_id')->nullable();
            $table->foreignId('candidate_id')->nullable();
            $table->foreignId('status_id')->nullable();            
            $table->foreign('employer_id')
                ->references('id')
                ->on('employer')
                ->onDelete('cascade');
            $table->foreign('candidate_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('status')
                ->onDelete('cascade');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitation');
        Schema::dropIfExists('status');
    }
}
