<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            // $table->foreignId('categorie_id') ->constrained('categories')->nullOnDelete();
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
        Schema::dropIfExists('produits');
    }
};
