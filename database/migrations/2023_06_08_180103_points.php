<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Points extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') ->constrained('users');
            $table->unsignedSmallInteger('pnt_offre')->default(0);
            $table->unsignedSmallInteger('pnt-acpt')->default(0);
            $table->unsignedSmallInteger('pnt_ingr')->default(0);
            $table->unsignedSmallInteger('pnt_rfs')->default(0);
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
