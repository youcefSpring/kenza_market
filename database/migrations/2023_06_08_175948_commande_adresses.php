<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeAdresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_adresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('commandes');
            // $table->foreignId('commune_id')->constrained('communes');
            $table->enum('type',['self','livraison']);
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->nullable();
            $table->string('num_tel');
            $table->string('address');
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
