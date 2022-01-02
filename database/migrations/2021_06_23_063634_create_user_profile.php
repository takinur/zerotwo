<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Table for Subscription 
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();            
            $table->string('type')->nullable();
            $table->string('price')->nullable();
        
        });
        //Table for employer Profile
        Schema::create('employer', function (Blueprint $table) {
            $table->id();          
            $table->foreignId('user_id');
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->foreignId('subscription_id');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('subscription_id')
                ->references('id')
                ->on('subscription');
        
        });
        //Table for User Profile
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();            
            $table->string('username')->unique()->nullable();
            $table->foreignId('user_id');
            $table->string('image_path')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        
        });
        //Create Skills Table
        Schema::create('skills', function(Blueprint $table){
            $table->id();
            $table->foreignId('profile_id');
            $table->string('name')->nullable();
            $table->integer('level')->nullable();
            $table->foreign('profile_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
           
        });
        
        //Create Socials Table
        Schema::create('socials', function(Blueprint $table){
            $table->id();
            $table->foreignId('profile_id');
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->foreign('profile_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
        });
        //Create Education Table
        Schema::create('educations', function(Blueprint $table){
            $table->id();
            $table->foreignId('profile_id');
            $table->string('institution')->nullable();
            $table->string('study_area')->nullable();
            $table->string('degree')->nullable();
            $table->date('attend_date')->nullable();
            $table->date('complete_date')->nullable();
            $table->foreign('profile_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
        });
        //Create Experience Table
        Schema::create('experiences', function(Blueprint $table){
            $table->id();
            $table->foreignId('profile_id');
            $table->boolean('is_current_job')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->foreign('profile_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
        });
         //Create Language Proficiency Table
        Schema::create('langProficiency', function(Blueprint $table){
            $table->id();
            $table->string('pro')->nullable();
        });
        //Create Language Table
        Schema::create('language', function(Blueprint $table){
            $table->id();
            $table->foreignId('profile_id');
            $table->string('name')->nullable();
            $table->foreignId('proficiency_id');
            $table->foreign('profile_id')
                ->references('id')
                ->on('user_profile')
                ->onDelete('cascade');
            $table->foreign('proficiency_id')
                ->references('id')
                ->on('langProficiency')
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
        Schema::dropIfExists('user_profile');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('socials');
        Schema::dropIfExists('educations');
        Schema::dropIfExists('experinces');
        Schema::dropIfExists('language');
        Schema::dropIfExists('langProficiency');
        Schema::dropIfExists('subscription');
        Schema::dropIfExists('employer');
    }
}
