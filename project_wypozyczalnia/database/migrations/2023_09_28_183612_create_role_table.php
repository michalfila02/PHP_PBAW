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
        Schema::create('role', function (Blueprint $table) {
            $table->string('Role', 10)->primary();
            $table->string('Wypozyczalnie_Nazwa', 20)->nullable()->index('fk_Role_Wypozyczalnie1_idx');

            $table->unique(['Role', 'Wypozyczalnie_Nazwa'], 'Role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
};
