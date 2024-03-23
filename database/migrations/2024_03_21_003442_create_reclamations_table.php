<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('objet');
            $table->date('date_reclamation');
            $table->string('fichier');
            $table->boolean('archive');
            $table->string('adresse');
            $table->string('telephone');
            $table->foreignId('etat_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->foreignId('type_reclamation_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
