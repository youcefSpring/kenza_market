<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlgeriaCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algeria_cities', function (Blueprint $table) {
            $table->id();
            $table->string('commune_name')->comment('Name of commune in arabic');
            $table->string('commune_name_ascii')->comment('Name of commune in ASCII characters (french)');
            $table->string('daira_name')->comment('Name of daira in arabic');
            $table->string('daira_name_ascii')->comment('Name of daira in ASCII characters (french)');
            $table->string('wilaya_code', 4);
            $table->string('wilaya_name')->comment('Name of wilaya in arabic');
            $table->string('wilaya_name_ascii')->comment('Name of wilaya in ASCII characters (french)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('algeria_cities');
    }
}
