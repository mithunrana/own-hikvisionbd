<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizationCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorization_certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('CertificateName');
            $table->longText('certificatedetails');
            $table->bigInteger('FeaturedImage1')->unsigned();
            $table->foreign('FeaturedImage1')->references('id')->on('images')->onDelete('restrict');
            $table->bigInteger('FeaturedImage2')->unsigned();
            $table->foreign('FeaturedImage2')->references('id')->on('images')->onDelete('restrict');
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
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
        Schema::dropIfExists('authorization_certificates');
    }
}
