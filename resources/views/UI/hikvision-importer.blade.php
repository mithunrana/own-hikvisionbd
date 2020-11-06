@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Hikvision Importer In Bangladesh | CCTV Camera NVR DVR Access Control";
    $keywords =  "Hikvision Importer In Bangladesh, hikvision, bangladesh, cctv, camera, nvr, dvr, access control, price, bd, hikvision support bangladesh, hikvision support bangladesh, hikvision dvr price in bd,tech help info";
    $description = "Hikvision Importer In Bangladesh, tech help info is hikvision importer in bangladesh";
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
                    <li class="breadcrumb-item active">Importer</li>
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
                    <h3 class="mb-4" style="color: #555;">We are the hikvision importer in bangladesh. Import Most of hikvision products In Bangladesh</h3>
                    <p style="color: #555;">hikvision importer in bangladesh. we import all kinds of hikvision products in bangladesh. hikvision have lot of CCTV product item. in
                        hikvision cctv product item we import most of Hikvision product in bangladesh. our imported product item is CCTV Camera, Network video recorder (NVR), Digital
                        Video Recorder(DVR), Encoder, Decoder, Access Control, Internet Protocol IP Camera, High Definition HD Camera, Turbo HD Analog Camera 720P, Turbo HD Analog Camera 1080P, Pan Till Zoom PTZ Camera.
                    Hikvision Available product in bangladesh list bellow here.
                </div>
            </div>
        </div>
    </div>
</section>
<!--end page header area-->


<!--start importer area-->
<section class="importer-area clearfix pb-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center; margin: 20px 0; margin-top: 40px; font-size: 25px; font-weight: 400;">Hikvision Importer In Bangladesh</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-custom" style="">In Bangladesh Availabe In This Category Product</p>
            </div>
        </div>
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
                        <a class="text-custom" href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">{{$DiscoverProduct->DiscoverName}} Products →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            @endforeach
        </div>
    </div>
</section>
<!--end importer area-->


<section style="background-color: #ecebeb;padding: 10px;">
    <div style="margin-top: 30px;" class="container">
        <h5 style="text-align: center">Hikvision Imported Available Product In Bangladesh</h5>
        <div style="margin-top: 20px;" class="row">
            @foreach(\App\ProductsPrimaryCategory::get() as $Category)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <h4 style="font-size: 18px">
                        <a style="color:black" href="{{asset('')}}products/{{$Category->CategoryUrl}}">{{$Category->CategoryName}}</a>
                    </h4>
                    @foreach($Category->SecondaryCategory as $Products)
                        @foreach($Products->Products as $EachProduct)
                            <h6><strong>
                                   <a style="color:#d71920" href="{{asset('')}}{{$EachProduct->Permalink}}"> {{$EachProduct->Model}} </a>
                            </strong></h6>
                            <p style="color:#6d6e71">{{$EachProduct->Name}}</p>
                        @endforeach
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div class="container">
        <p class="text-gray mt-3 wow fadeInDown" data-wow-duration="1s">
            Hikvision Is the leading Security Surveillance Solution Company In Bangladesh Hikvision.<br>
            Hikvision provides video surveillance products and vertical market solutions in the global market, through more than 2,400
            partners in 155 countries and regions. In mainland China, Hikvision now partners with more than 40,000 distributors, system integrators
            and installers. The Company’s products and solutions have been widely deployed in a number of vertical markets and in notable facilities
            around the world including the Beijing Olympic Stadium, Shanghai Expo,
            Philadelphia Safe Communities in the U.S., South Korea Seoul Safe City, Brazil World Cup Stadium, the
            Italy Linate Airport, and many others. For More About <a href="https://www.hikvision.com">Hikvision Visit</a><br>
            Tech Help Info provide all kinds of hikvision product in bangladesh
            Tech Help Info is the leading IT Solution Company In Bangladesh. Tech Help Info Provide CCTV Camera Solution Security Surveillance, Software solution,
            Jobs, News, Tutorial, Freelancing Training, cyber security in bangladesh. For More about Visit <a href="https://www.techhelpinfo.com">Tech Help Info</a>
            Tech Help Info not only supply product, tech help info provide full complete solution. From Product Supply to Installment full Complete guideline.
            we have Special For CCTV Installment Team they provide full professional installment service. Tech Help Info Always provide Quality Service
        </p>
    </div>
</section>


@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
