<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('magasin_id') ->constrained('magasins');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('nom');
            $table->string('image')->nullable();
            $table->float('prix')->defaulte(0);
            $table->float('prix_promo')->nullable();
            $table->unsignedSmallInteger('quantite')->default(0);
            $table->softDeletes();
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
