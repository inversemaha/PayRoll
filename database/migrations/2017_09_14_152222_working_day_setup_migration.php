<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkingDaySetupMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_day_setup', function (Blueprint $table) {
        $table->increments('working_day_id');
        $table->string('day')->unique();
        $table->string('working_day_status');//1= Working day, 0=Holiday,
        $table->string('office_starting_time')->nullable();
        $table->string('office_closing_time')->nullable();
        $table->timestamp('created_at')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
