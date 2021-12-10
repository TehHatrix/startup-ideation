<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_structures', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('canvas_id');
            $table->foreign('canvas_id')->references('id')->on('lean_canvases')->onDelete('cascade');
            $table->string('topic');
            $table->integer('publisher_id');
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
        Schema::dropIfExists('cost_structures', function (Blueprint $table) {
            $table->dropForeign('lean_canvases_canvas_id_foregin');
        });
    }
}
