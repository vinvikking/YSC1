<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngeschrevenList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('CampaignSignUp', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('campaign_id');
            $table->unsignedInteger('influencer_id');
            $table->dateTime('startDateTime');
            $table->dateTime('endDateTime');
            $table->foreign('campaign_id')->references('id')->on('campaign');
            $table->foreign('influencer_id')->references('id')->on('influencers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CampaignSignUp');
    }
}
