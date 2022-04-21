<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garanties', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("titre2");
            $table->text("description");
            $table->decimal("prix",10, 2);
            $table->string("image");
            $table->bigInteger("categories_id")->unsigned();
            $table->timestamps();
            $table->foreign('categories_id')
                ->references("id")
                ->on("categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garanties');
    }
}
