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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('code_barre')->unique();
            $table->string('num_commande')->unique();
            $table->date('date');
            $table->string('sexe')->nullable();
            $table->decimal('montant', 10, 2);
            
            $table->foreignId('type_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('etat_id')->constrained();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
