<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("client_id")->unsigned();
            $table->integer("quantite");
            $table->decimal("prix_total")->default(0);
            $table->decimal("total_recu")->default(0);
            $table->decimal("change")->default(0);
            $table->string("paiement_type")->default("en espéces");
            $table->string("paiement_status")->default("payé");
            $table->timestamps();
            $table->foreign('client_id')
                ->references("id")
                ->on("clients")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventes');
    }
}
