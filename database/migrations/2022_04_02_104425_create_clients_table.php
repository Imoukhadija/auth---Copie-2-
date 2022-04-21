<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string('Nature')->nullable();
            $table->string('CIN_RC_IF')->nullable();
            $table->string('civilite')->nullable();
            
            $table->date('date_naissance')->nullable();
            $table->string('genre')->nullable();

            $table->string('Situation_familiale')->nullable();
            
            $table->string('Ville')->nullable();
            $table->integer('code_postale')->nullable();
            $table->integer('telephone_fixe_mobile')->nullable();
            
            $table->integer('telephone_mobile')->nullable();
            $table->string('email')->nullable();

            
            $table->string('categoriepermi')->nullable();

            
            $table->string('lien_avec_le_souscripteur')->nullable();

            $table->string('CSP')->nullable();


            $table->date('datepermis')->nullable();

            $table->string('numeropermi')->nullable();

            $table->string("address")->nullable();
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
        Schema::dropIfExists('clients');
    }
}
