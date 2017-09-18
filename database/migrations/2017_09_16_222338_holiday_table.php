<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HolidayTable extends Migration
{

    public function up()
    {
        Schema::create('holiday_table', function (Blueprint $table) {
            $table->increments('holiday_id');
            $table->string('holiday_date');
            $table->string('holiday_occasion')->nullable();
            $table->string('pay_status'); //1=Paid,0= Unpaid
            $table->timestamp('created_at')->nullable();
        });
    }


    public function down()
    {
        //
    }
}
