<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Magasins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') ->constrained('users','id')->cascadeOnDelete();
            // $table->foreignId('commande_id') ->constrained('commandes','id')->nullOnDelete();
            $table->string('nom');
            $table->string('logo')->nullable();
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
