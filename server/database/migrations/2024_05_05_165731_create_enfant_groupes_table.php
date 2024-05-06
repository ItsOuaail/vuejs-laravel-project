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
        Schema::create('enfant_groupe', function (Blueprint $table) {
            $table->foreignId('idEnfant')->constrained('enfants', 'idEnfant');
            $table->foreignId('idGroupe')->constrained('groupes', 'idGroupe');
            //$table->primary(['idEnfant', 'idGroupe']);
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
        Schema::dropIfExists('enfant_groupes');
    }
};
