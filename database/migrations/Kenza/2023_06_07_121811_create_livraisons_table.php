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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->foreignId('user_id') ->constrained('users');
            $table->foreignId('magasin_id') ->constrained('magasins');
            $table->foreignId('commande_id') ->constrained('commandes');
            $table->timestamps();

            $table->primary(['users' , 'magasins', 'commandes']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
};
