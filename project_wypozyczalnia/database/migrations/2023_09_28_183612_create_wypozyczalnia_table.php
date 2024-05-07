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
        Schema::create('wypozyczalnia', function (Blueprint $table) {
            $table->integer('Nr_wypozyczenia')->primary();
            $table->string('Imie', 45);
            $table->string('Nazwisko', 45);
            $table->integer('PESEL');
            $table->date('Data_wypożyczenia');
            $table->date('Data_oddania')->nullable();
            $table->string('Samochody_Nr_rejestracyjny', 20);

            $table->index(['Samochody_Nr_rejestracyjny'], 'fk_Wypozyczalnia_Samochody1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wypozyczalnia');
    }
};
