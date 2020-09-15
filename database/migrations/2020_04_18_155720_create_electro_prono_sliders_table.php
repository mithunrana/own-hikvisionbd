<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectroPronoSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electro_prono_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sliderimage')->unsigned();
            $table->foreign('sliderimage')->references('id')->on('images')->onDelete('restrict');
            $table->text('sliderTopic')->nullable();
            $table->integer('ActiveStatus')->default(0);
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
        Schema::dropIfExists('electro_prono_sliders');
    }
}
