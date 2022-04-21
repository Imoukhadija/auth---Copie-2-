<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesVentesTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules_ventes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("vehicules_id")->unsigned();
            $table->bigInteger("ventes_id")->unsigned();
            $table->foreign('vehicules_id')
                ->references("id")
                ->on("vehicules")->onDelete("cascade");
            $table->foreign('ventes_id')
                ->references("id")
                ->on("ventes")->onDelete("cascade");
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
        Schema::dropIfExists('vehicules_ventes');
    }
}
