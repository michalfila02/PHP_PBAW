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
        Schema::create('wypozyczalnie', function (Blueprint $table) {
            $table->string('Nazwa', 20)->primary();
            $table->string('Miasto', 45);
            $table->string('Ulica', 45);
            $table->integer('Nr_ulicy');
            $table->string('Telefon_kontaktowy', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wypozyczalnie');
    }
};
