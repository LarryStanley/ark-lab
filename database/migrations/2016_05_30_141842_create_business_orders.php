<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->text("serial");         //訂單編號
            $table->date("created_at");     //訂單日期
            $table->date("updated_at");     //更新日期
            $table->text("order_type");     //採購類型
            $table->text("unit_id");        //採購單位
            $table->integer("uniform_number");  //統一編號
            $table->date("receipt_send_at");//發票祭出時間
            $table->text("pay_type");       //付款方式
            $table->date("deliver_at");     //交貨日期
            $table->date("pay_at");         //付款日
            $table->date("class_at");       //課程日期
            $table->text("class_number");   //課程編號
            $table->integer("class_amount");    //課程報價
            $table->boolean("amount_pay");  //已給/未給
            $table->text("teacher");        //講師安排

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('business_orders');
    }
}
