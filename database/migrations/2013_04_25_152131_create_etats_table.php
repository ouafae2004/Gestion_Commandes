<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->string('etat');
            $table->enum('role', ['ramasseur','controleur','caissier','expediteur' ])->nullable(); 

            $table->timestamps();
        });
    }
   

    public function down(): void {
        Schema::dropIfExists('etats');
    }
};
