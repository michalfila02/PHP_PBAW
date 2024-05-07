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
        Schema::create('samochody', function (Blueprint $table) {
            $table->string('Nr_rejestracyjny', 20);
            $table->string('Marka', 45);
            $table->string('Model', 45);
            $table->double('Koszt_wynajecia_na_dzien');
            $table->integer('Przebieg_w_km');
            $table->string('Wypozyczalnie_Nazwa', 20)->index('fk_Samochody_Wypozyczalnie1_idx');

            $table->primary(['Nr_rejestracyjny']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samochody');
    }
};
