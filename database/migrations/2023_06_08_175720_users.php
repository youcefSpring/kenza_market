<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('commune_id')->constrained('communes');
            // $table->foreignId('magasin_id')->constrained('magasins');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('num_tel')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->string('type_vcul');
            $table->string('num_rgtcmrc');
            $table->string('num_anp');
            $table->string('denom_socl');
            $table->string('num_rgtAnp');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider_token',1000)->nullable();

            $table->rememberToken();
            //0 = clien ...
            $table->bigInteger('profil')->default(0);
            $table->timestamp('last_vote')->nullable();
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
