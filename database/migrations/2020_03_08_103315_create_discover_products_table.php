<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscoverProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discover_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('FeaturedImage');
            $table->text('DiscoverName');
            $table->text('PrimaryCategoryId');
            $table->text('ImageTitleText')->nullable();
            $table->text('ImageAltText')->nullable();
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
        Schema::dropIfExists('discover_products');
    }
}
