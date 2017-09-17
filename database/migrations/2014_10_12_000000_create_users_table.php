<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('emp_full_name');
            $table->string('emp_f_name');
            $table->string('user_picture')->nullable();
            $table->string('emp_birthday')->nullable();
            $table->string('user_designation')->nullable();
            $table->string('user_religion')->nullable();
            $table->string('user_gender')->nullable();

            $table->string('user_phone_number')->nullable();


            $table->string('user_email')->unique();
            $table->integer('user_type'); //1=Super Admin, 2= employee
            $table->string('user_password');
            $table->integer('users_active_status');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
