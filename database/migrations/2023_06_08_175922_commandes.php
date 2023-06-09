<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('magasin_id')->constrained('magasins');
            $table->foreignId('user_id')->constrained('users');
            $table->string('nombre')->unique();
            $table->string('code');
            $table->enum('cas',['en attente','en cour','livrer','terminer','annuler','rembourser'])->default('en attente');
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
