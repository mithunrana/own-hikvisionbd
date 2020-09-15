<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('BrandName');
            $table->string('BrandUrl');
            $table->text('BrandBrowserTitle');
            $table->text('SeoHeading')->nullable();
            $table->longText('BrandDetails')->nullable();
            $table->longText('BrandSeoKeyword');
            $table->longText('BrandSeoDescription');
            $table->bigInteger('FeaturedImage')->unsigned();
            $table->foreign('FeaturedImage')->references('id')->on('products_images')->onDelete('restrict');
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
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
        Schema::dropIfExists('products_brands');
    }
}
