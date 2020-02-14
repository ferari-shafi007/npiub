<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fronts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('logo');
            $table->string('head');
            $table->string('tagLine');
            $table->string('aboutImg');
            $table->longText('aboutText');
            $table->string('aboutHeader');
            $table->string('address');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->string('map');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fronts');
    }
}
