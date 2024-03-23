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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('sexe');
            $table->string('email');
            $table->string('password');
            $table->date('date_naissance');
            $table->date('date_recrutement');
            $table->string('observation');
            $table->foreignId('poste_id')->constrained();
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('etablissement_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
