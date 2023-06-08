<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessaryDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessary_docs', function (Blueprint $table) {

            if (Schema::hasTable('necessary_docs')) {
              Schema::dropIfExists('necessary_docs');
            }

            $table->id();
            $table->text('name')->nullable();
        //    $table->bigInteger('document_id');
            $table->foreignId('document_id')->constrained();
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
        Schema::dropIfExists('necessary_docs');
    }
}
