<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsPrimaryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_primary_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CategoryName');
            $table->string('CategoryUrl');
            $table->text('SeoHeading')->nullable();
            $table->longText('CategoryDetails')->nullable();
            $table->text('CategorySeoKeyword');
            $table->text('CategorySeoDescription');
            $table->string('CategoryBrowserTitle');
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
        Schema::dropIfExists('products_primary_categories');
    }
}
