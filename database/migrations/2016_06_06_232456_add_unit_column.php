<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sell_units', function (Blueprint $table) {
            $table->string("phone_number")->nullable();
            $table->string("address")->nullable();
            $table->string("contact_name")->nullable();
            $table->integer("uniform_number")->nullable();
            $table->string("email")->nullable();
            $table->text("note")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sell_units', function (Blueprint $table) {
            //
        });
    }
}
