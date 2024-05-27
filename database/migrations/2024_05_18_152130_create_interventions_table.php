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
        Schema::create('interventions', function (Blueprint $table) {
            $table->string('codeInter', 20)->primary();
            $table->date('dateInter');
            $table->string('codeEmp', 20);
            $table->string('detailsInter', 60);
            $table->string('codeTech', 20);
            $table->string('syntheseReparation', 20);
            $table->date('dateFinIntervention');
            $table->foreign('codeEmp')->references('codeEmp')->on('employes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codeTech')->references('codeTech')->on('techniciens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
