<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArkPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ark_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("content");
            $table->string("image");
            $table->integer("completion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ark_plan');
    }
}
