<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCctvCameraMegaPixelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cctv_camera_mega_pixels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('MegaPixel');
            $table->text('MegaPixelUrl');
            $table->text('MegaPixelBrowserTitle');
            $table->text('SeoHeading')->nullable();
            $table->longText('MegaPixelDetails')->nullable();
            $table->longText('MegaPixelSeoKeyword')->nullable();
            $table->longText('MegaPixelSeoDescription')->nullable();
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
        Schema::dropIfExists('cctv_camera_mega_pixels');
    }
}
