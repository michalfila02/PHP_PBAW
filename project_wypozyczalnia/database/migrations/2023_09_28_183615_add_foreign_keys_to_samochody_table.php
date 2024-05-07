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
        Schema::table('samochody', function (Blueprint $table) {
            $table->foreign(['Wypozyczalnie_Nazwa'], 'fk_Samochody_Wypozyczalnie1')->references(['Nazwa'])->on('wypozyczalnie')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('samochody', function (Blueprint $table) {
            $table->dropForeign('fk_Samochody_Wypozyczalnie1');
        });
    }
};
