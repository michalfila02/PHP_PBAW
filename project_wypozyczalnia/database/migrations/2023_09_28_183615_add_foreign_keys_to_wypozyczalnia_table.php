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
        Schema::table('wypozyczalnia', function (Blueprint $table) {
            $table->foreign(['Samochody_Nr_rejestracyjny'], 'fk_Wypozyczalnia_Samochody1')->references(['Nr_rejestracyjny'])->on('samochody')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wypozyczalnia', function (Blueprint $table) {
            $table->dropForeign('fk_Wypozyczalnia_Samochody1');
        });
    }
};
