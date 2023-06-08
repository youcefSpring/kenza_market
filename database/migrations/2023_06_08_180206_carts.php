<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('cookie_id');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('produit_id')->constrained('produits');
            $table->unsignedSmallInteger('quantite')->default('1');
            $table->timestamps();

            $table->unique(['cookie_id','produit_id']);
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
