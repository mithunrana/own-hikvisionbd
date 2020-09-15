<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('BrowserTitle');
            $table->text('Permalink');
            $table->text('EnventsName');
            $table->date('EventsDate')->format('d/m/Y');
            $table->time('EventsTime');
            $table->longText('SeoKeyword')->nullable();
            $table->longText('SeoDescription')->nullable();
            $table->bigInteger('FeaturedImage1')->unsigned();
            $table->foreign('FeaturedImage1')->references('id')->on('images');
            $table->bigInteger('FeaturedImage2')->unsigned();
            $table->foreign('FeaturedImage2')->references('id')->on('images');
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
            $table->longText('FeaturedDetails')->nullable();
            $table->longText('EventsDetails')->nullable();
            $table->longText('ActiveStatus')->default(0);
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
        Schema::dropIfExists('events');
    }
}
