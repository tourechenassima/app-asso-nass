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
        Schema::create('jamayats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baladia')->nullable();
            $table->string('tasmia')->nullable();
            $table->string('rakm-itimad')->nullable();
            $table->date('tarikh-tassiss')->nullable();
            $table->date('tarikh-motabaka')->nullable();
            $table->string('rakm-itimad1')->nullable();
            $table->date('tarikh-tajdid1')->nullable();
            $table->string('tabaa')->nullable();
            $table->string('kitaa')->nullable();
            $table->string('prenom-president1')->nullable();
            $table->string('nom-president1')->nullable();
            $table->string('adresse')->nullable();
            $table->string('phone')->nullable();
            $table->string('nachta')->nullable();
            $table->string('remarque')->nullable();
            $table->string('email')->nullable();
            $table->string('rakm-itimad2')->nullable();
            $table->string('rakm-itimad3')->nullable();
            $table->string('rakm-itimad4')->nullable();
            $table->string('rakm-itimad5')->nullable();
            $table->string('rakm-itimad6')->nullable();
            $table->date('tarikh-tajdid2')->nullable();
            $table->date('tarikh-tajdid3')->nullable();
            $table->date('tarikh-tajdid4')->nullable();
            $table->date('tarikh-tajdid5')->nullable();
            $table->date('tarikh-tajdid6')->nullable(); 
            $table->string('halat-elmilef')->nullable();
            $table->string('nom-president2')->nullable();
            $table->string('nom-president3')->nullable();
            $table->string('nom-president4')->nullable();
            $table->string('nom-president5')->nullable();
            $table->string('nom-president6')->nullable();
            $table->string('nom-president7')->nullable();
            $table->string('prenom-president2')->nullable();
            $table->string('prenom-president3')->nullable();
            $table->string('prenom-president4')->nullable();
            $table->string('prenom-president5')->nullable();
            $table->string('prenom-president6')->nullable();
            $table->string('prenom-president7')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('slug')->nullable();
            $table->date('akherTarikhTajdid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamayats');
       
       
            
    }
};
