<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{

    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel_1')->nullable();
            $table->string('tel_2')->nullable();
            $table->string('address')->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
