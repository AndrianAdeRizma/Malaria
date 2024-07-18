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
        Schema::create('trainings', function (Blueprint $table) {
            $table->integer('id',11);
            $table->enum('demam',['Rendah','Sedang','Tinggi','Sangat Tinggi']);
            $table->enum('sakit_kepala',['Ringan','Sedang','Berat']);
            $table->enum('mengigil',['Iya','Tidak']);
            $table->enum('berkeringat',['iya','Tidak']);
            $table->enum('mual',['Sering','Tidak Sering']);
            $table->enum('diagnosa',['Positif','Negatif']);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
