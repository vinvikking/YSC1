<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Schema::dropIfExists('campaign');

        Schema::create('campaign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('business_id');
            $table->string('title');
            $table->string('city');
            $table->string('postal_code');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_phone2');
            $table->string('contact_email');
            $table->text('description')->nullable();
            $table->dateTime('startDateTime');
            $table->dateTime('endDateTime');
            $table->string('image');
            $table->timestamps();

           $table->foreign('business_id')->references('id')->on('business');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign');
    }
}
