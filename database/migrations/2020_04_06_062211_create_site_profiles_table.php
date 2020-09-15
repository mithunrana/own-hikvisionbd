<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('ShortDescription')->nullable();
            $table->text('SiteName')->nullable();
            $table->text('EditorPublisher')->nullable();
            $table->longText('CorporateAddress')->nullable();
            $table->longText('HeadAddress')->nullable();
            $table->longText('CorporatePhone')->nullable();
            $table->longText('Phone1')->nullable();
            $table->longText('phone2')->nullable();
            $table->longText('phone3')->nullable();
            $table->longText('CorporateEmail')->nullable();
            $table->longText('Email2')->nullable();
            $table->longText('Email3')->nullable();
            $table->bigInteger('MainLogo')->unsigned();
            $table->foreign('MainLogo')->references('id')->on('images')->onDelete('restrict');
            $table->text('MainLogoTitleText')->nullable();
            $table->text('MainLogoAltText')->nullable();
            $table->longText('CopyRightText')->nullable();
            $table->longText('DomainName')->nullable();
            $table->longText('DesignerDeveloperName')->nullable();
            $table->longText('DesignerDeveloperDomain')->nullable();
            $table->longText('GoogleMap')->nullable();
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
        Schema::dropIfExists('site_profiles');
    }
}
