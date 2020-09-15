<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tutorials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('BrowserTitle');
            $table->text('Permalink');
            $table->text('BlogName');
            $table->longText('SeoKeyword')->nullable();
            $table->longText('SeoDescription')->nullable();
            $table->text('VideoURL');
            $table->text('EmbeddedVideo');
            $table->bigInteger('FeaturedImage')->unsigned();
            $table->foreign('FeaturedImage')->references('id')->on('images')->onDelete('restrict');
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
            $table->longText('BlogDetails');
            $table->longText('StructuredData')->nullable();
            $table->longText('Category');
            $table->integer('blog_poster');
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
        Schema::dropIfExists('blog_tutorials');
    }
}
