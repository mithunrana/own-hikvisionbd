<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Model');
            $table->text('Name');
            $table->text('Datasheet')->nullable();
            $table->longText('ProductShortDescription')->nullable();
            $table->longText('Specification')->nullable();
            $table->bigInteger('FeaturedImage')->unsigned();
            $table->foreign('FeaturedImage')->references('id')->on('products_images')->onDelete('restrict');
            $table->text('Permalink');
            $table->integer('Category');
            $table->text('SeoHeading');
            $table->integer('MegaPixelId')->nullable();
            $table->integer('BrandId')->nullable();
            $table->text('BrowserTitle');
            $table->longText('SeoKeyword')->nullable();
            $table->longText('SeoDescription')->nullable();
            $table->text('EmbeddedCode')->nullable();
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
            $table->text('StructuredData')->nullable();
            $table->decimal('RegularPrice', 15, 2)->nullable();
            $table->decimal('CurrentPrice', 15, 2)->nullable();
            $table->decimal('PartnerPrice', 15, 2)->nullable();
            $table->decimal('PriceStatus')->default(1);
            $table->text('ActiveStatus')->default(0);
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
        Schema::dropIfExists('products');
    }
}
