<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeFraudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('fraudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('commune_id') ->constrained('communes','id');
            $table->string('nom');
            $table->text('description')->nullable();
            $table->string('image');
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
