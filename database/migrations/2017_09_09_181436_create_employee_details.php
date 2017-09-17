<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_table', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('employee_name');
            $table->string('employee_father_name')->nullable();
            $table->string('emp_image')->nullable();
            $table->string('employee_birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('employee_phone')->nullable();
            $table->string('employee_local_address')->nullable();
            $table->string('employee_permanent_address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('employee_martial_status')->nullable();
            $table->string('resume')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->integer('employee_id')->nullable()->unique();
            $table->string('employee_department')->nullable();
            $table->string('employee_designation')->nullable();
            $table->string('employee_date_of_joining')->nullable();
            $table->integer('employee_joining_salary')->nullable();
            $table->string('employee_account_holder_name')->nullable();
            $table->integer('employee_account_number')->nullable();
            $table->string('employee_bank_name')->nullable();
            $table->string('employee_bank_branch')->nullable();
            $table->string('active_status');
            $table->timestamps();
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
