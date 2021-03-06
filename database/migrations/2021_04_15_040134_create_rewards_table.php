<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('sales')->default(0)->nullable();
            $table->integer('reward_quantity');
            $table->bigInteger('package_id')->unsigned();
            $table->string('img_path')->nullable();
            $table->timestamps();

            $table->foreign('package_id')
                  ->references('id')->on('packages');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rewards');
    }
}
