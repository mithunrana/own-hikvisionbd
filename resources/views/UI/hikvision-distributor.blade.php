@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Hikvision Distributor In Bangladesh | CCTV Camera";
    $keywords =  "Hikvision distributor In Bangladesh, hikvision, bangladesh, cctv, camera, nvr, dvr, access control, price, bd, hikvision support bangladesh, hikvision support bangladesh, hikvision dvr price in bd,tech help info";
    $description = "Hikvision Distributor In Bangladesh, tech help info is hikvision Distributor in bangladesh";
@endphp

@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->

<section class="brrr bg-light wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol style="background: transparent;" class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
                    <li class="breadcrumb-item active">Hikvision Distributor</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--start page header area-->
<section class="success-history-header clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sh-header-img">
                    <h1 class="mb-4" style="color: #555;font-size: 24px;">Hikvision Distributor In Bangladesh</h1>
                    <h4 class="mb-4" style="font-size: 20px;">We are the most hikvision product importer and distributor full bangladesh.
                        We distribute hikvision products & CCTV Camera solution Bangladesh All Division and all 64 District. Also We provide
                         provide CCTV Camera Install Service in bangladesh, Office Access Control and securit solution, Home Security System and Other Service</h4>
                    <p style="color: #555;">Our Distributed hikvision product is CCTV Camera, NVR, DVR, Access Control, Network Camera, Analog Camera, Network Video Recorder, Network PTZ Camera,
                        TurboHD Analog Camera - 720p, TurboHD Analog Camera - 1080p, TurboHD Analog PTZ Camera - 1080p,
                        Analog Camera PICADIS - 720TVL/960H, Digital Video Recorder, Keyboards, Accessories, Encoders and
                        Decoders, Monitor & other accessories </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end page header area-->

<!--start distributor area-->
<section class="distributor-area clearfix py-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
                <div class="card" style="border-color: #337ab7;width: 100%">
                    <div class="card-header text-light" style="background-color:#d71920; border-radius: 0;">
                        <p class="m-0">Bangladesh Hikvision Distribution Area</p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <strong style="font-size: 20px;text-align: center;color:red;">For Hikvision Product Fell Free To Contact With Us {{$SiteProfile->CorporatePhone}}</strong>
                        </div>
                        <div class="row">
                            @foreach(\App\Division::get() as $Division)
                            <div style="margin-top: 10px;" style="padding: 2px;" class="district-list col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card" style="width:100%">
                                    <div class="card-header">
                                        <h5 style="color:#d71920">Hikvision Distributor {{$Division->DivisionName}} Area</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @foreach($Division->DistrictList as $District)
                                        <li class="list-group-item">
                                            <h6>{{$District->Name}}</h6>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="m-0">Hikvision Distributor</p>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--end distributor area-->



<section style="background-color: #ececec;padding: 15px;margin-top: 20px;margin-bottom: 20px;">
    <div class="container">
        <h4 style="text-align: center;font-size: 20px;">Available Hikvision Product In Bangladesh</h4>
        <div class="row">
            @foreach(\App\DiscoverProducts::orderBy('id','DESC')->get() as $DiscoverProduct)
                <!--col-md-4-->
                    <div style="margin-top: 20px;" class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                        <div style="border-radius: 0;" class="sh-box">
                            <div class="sh-img">
                                <a href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">
                                    <img src="{{asset('')}}{{$DiscoverProduct->image->imageurl}}" class="img-fluid" alt="image">
                                    <h4 class="text-custom">{{$DiscoverProduct->DiscoverName}}</h4>
                                </a>
                            </div>

                            <div class="sh-txt">
                                <a class="text-custom" href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">Hikvision {{$DiscoverProduct->DiscoverName}} →</a>
                            </div>
                        </div>
                    </div>
                    <!--col-md-4-->
                @endforeach
        </div>
    </div>
</section>

@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
