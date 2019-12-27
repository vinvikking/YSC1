<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Influencers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('influencers', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('voornaam');
            $table->unsignedInteger('user_id');
            $table->string('achternaam');
            $table->text('instagram_name');
            $table->text('facebook_name');
            $table->text('twitter_name');
            $table->text('interesse');
            $table->integer('leeftijd');
            $table->string('telefoonnummer');
            $table->string('email');
            $table->integer('volgers');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('influencers');
    }
}
