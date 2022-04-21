<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();

            $table->string('usage')->nullable();

            $table->string('marque')->nullable();

            $table->string('catégorie')->nullable();

            $table->string('version')->nullable();

            $table->string('typemine')->nullable();

            $table->string('immatriculation')->nullable();

            $table->date('registration_date')->nullable();

            
            $table->date('expiration_date')->nullable();

            $table->string("titre2");

            $table->boolean("status")->default(1);
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
        Schema::dropIfExists('vehicules');
    }
}
