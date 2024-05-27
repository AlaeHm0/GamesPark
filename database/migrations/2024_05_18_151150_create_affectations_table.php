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
        Schema::create('affectations', function (Blueprint $table) {
            $table->string('codeEmp', 20);
            $table->string('codeMat', 20);
            $table->date('dateDebutAffectation');
            $table->date('dateFinAffectation');
            $table->primary(['codeEmp', 'codeMat', 'dateDebutAffectation']);
            $table->foreign('codeEmp')->references('codeEmp')->on('employes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codeMat')->references('codeMat')->on('materiels')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
