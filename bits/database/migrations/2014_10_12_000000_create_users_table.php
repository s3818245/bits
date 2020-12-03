<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('id', 200);
            $table->string('username');
            $table->string('name');
            $table->string('password');
            $table->longText('description');
            $table->date('dob'); 
            $table->boolean('gender'); 
            $table->string('avatar'); 
            $table->string('location', 255);
            $table->primary('id');
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
