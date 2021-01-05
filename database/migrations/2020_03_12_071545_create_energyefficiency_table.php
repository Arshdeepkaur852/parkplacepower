<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateEnergyEfficiencyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('energyefficiency',function(Blueprint $table){
            $table->increments("id");
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("email_id")->nullable();
            $table->string("mobile")->nullable();
            $table->text("address")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("area_code")->nullable();
            $table->string("ip_address")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energyefficiency');
    }

}