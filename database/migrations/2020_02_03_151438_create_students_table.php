<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('institute');
            $table->string('bach');
            $table->string('department');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('stdId');
            $table->string('gender');
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('job')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('status');
            $table->string('url')->nullable();
            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
