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
        Schema::create('commande_produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('commandes');
            $table->foreignId('produit_id')->nullable()->constrained('produits')->nullOnDelete();
            $table->string('nom_product');
            $table->float('prix');
            $table->unsignedSmallInteger('quantite_dmnd')->default(1);
            $table->timestamps();

            $table->unique(['commande_id','produit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_produits');
    }
};
