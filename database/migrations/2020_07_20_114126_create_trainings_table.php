<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('BrowserTitle');
            $table->text('Permalink');
            $table->text('TrainingName');
            $table->date('TrainingDate')->format('d/m/Y');
            $table->time('TrainingTime');
            $table->longText('SeoKeyword')->nullable();
            $table->longText('SeoDescription')->nullable();
            $table->bigInteger('FeaturedImage1')->unsigned();
            $table->foreign('FeaturedImage1')->references('id')->on('images')->onDelete('restrict');
            $table->bigInteger('FeaturedImage2')->unsigned();
            $table->foreign('FeaturedImage2')->references('id')->on('images')->onDelete('restrict');
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
            $table->longText('TrainingShortText')->nullable();
            $table->longText('TrainingDetails')->nullable();
            $table->integer('ActiveStatus')->default('0');
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
        Schema::dropIfExists('trainings');
    }
}
