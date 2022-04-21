<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarantieVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantie_ventes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("garantie_id")->unsigned();
            $table->bigInteger("ventes_id")->unsigned();
            $table->foreign('garantie_id')
                ->references("id")
                ->on("garanties")->onDelete("cascade");
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
        Schema::dropIfExists('garantie_ventes');
    }
}
