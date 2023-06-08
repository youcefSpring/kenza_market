<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use DB;
use Illuminate\Support\Facades\DB;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('type');
            $table->integer('qte');
            $table->float('prix_achat');
            $table->float('prix_vente');
            $table->string('description')->nullable();
            $table->date('date_expiration');
            $table->string('img')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
