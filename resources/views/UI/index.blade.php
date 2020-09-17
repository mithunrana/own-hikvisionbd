@php
$SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Hikvision Bangladesh | CCTV Camera NVR DVR Access Control";
    $keywords =  "hikvision, importer,distributor, bangladesh,cctv camera, nvr, dvr, cctv camera price";
    $description =  "Hikvision Bangladesh Importer of hikvision cctv camera NVR, DVR, ACCESS CONTROL, total hikvision camera cctv solution service provider in bangladesh";
@endphp


@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->



<!-- START SLIDER-->
<section class="showcase wow fadeInDown" data-wow-duration="1s">
    @php
        $count = App\ElectroPronoSlider::where('ActiveStatus',1)->count();
        $skip = 1;
        $limit = $count - $skip;
    @endphp
    @if($count>0)
        <div id="myslider" class="carousel slide" data-ride="carousel" data-interval='4000'>
            <ol class="carousel-indicators">
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(1)->get() as $Slider)
                    <li data-slide-to="0" data-target="#myslider" class="active"></li>
                @endforeach
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(1)->take($limit)->get() as $Slider)
                    <li data-slide-to="{{ $loop->iteration }}" data-target="#myslider"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(1)->get() as $Slider)
                    <div class="carousel-item carousel-img-1 active">
                        <img style="max-width: 100%;" src="{{asset('')}}{{$Slider->image->imageurl}}">
                    </div>
                @endforeach
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(1)->take($limit)->get() as $Slider)
                    <div class="carousel-item carousel-img-1">
                        <img style="max-width: 100%;" src="{{asset('')}}{{$Slider->image->imageurl}}">
                    </div>
                @endforeach
            </div>
            <a href="#myslider" class="carousel-control-prev" role="button" data-slide="prev">
                <i class="fa fa-angle-left slider-control"></i>
            </a>
            <a href="#myslider" class="carousel-control-next" data-slide="next">
                <i class="fa fa-angle-right slider-control"></i>
            </a>
        </div>
    @endif
</section>
<!--END SLIDER-->






<!--start products area-->
<section class="products-area clearfix py-5 wow fadeInDown" data-wow-duration="1s">

    <div class="section-heading text-center">
        <h1 style="font-size: 31px;" class="heading-title">Hikvision Bangladesh | CCTV Camera Price In Bangldesh</h1>
        <p class="heading-text">
            <p>We Provide all kinds of hikvision CCTV Camera Products in bangladesh<br>
                <strong>Hikvision NVR, DVR, HD CCTV CAMERA, IP CCTV CAMERA, ANALOG CAMERA, Access Control etc.</strong>
            </p>
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ml-1 mb-4">
                    <h4 class="text-custom">Latest Products
                        <!-- <div class="next-prev float-right mr-2">
                             <i class="fa fa-angle-left prv ps-control"></i>
                             <i class="fa fa-angle-right nxt ps-control"></i>
                         </div>-->
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
        <!-- class="col">
                <div class="products-box">
                    <div class="products-slider products-slider-custom">
                        @foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(8)->get() as $Products)
            <div class="products-item">
                <div class="product-box">
                    <div class="product-info">
                         <div class="product-info-img">
                             <a href="{{asset('')}}{{$Products->Permalink}}">
                                            <img src="{{asset('')}}{{$Products->image->imageurl}}" alt="{{$Products->ImageAltText}}">
                                         </a>
                                     </div>
                                     <h6 class="product-name">
                                         <a style="margin-bottom: 0px;color: #d71920;font-weight: 700;font-size: 16px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Model}}</a>
                                     </h6>
                                     <p>
                                         <a style="margin-bottom: 0px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Name}}</a>
                                     </p>
                                </div>
                                <div class="p-compare">
                                    <div class="form-check">
                                        <label class="fomr-chck-label" for="check">
                                            <input id="check" id="p-check" class="form-check-input" type="checkbox">
                                            Add to Compare
                                        </label>
                                    </div>
                                </div>
                                <div class="plus-arrow">
                                    <a href="#THI{{$Products->Model}}" data-toggle="modal">
                                        <img src="{{asset('')}}UI/img/plus.png" alt="">
                                    </a>
                                </div>
                                <div class="back-arrow">
                                    <a href="#">
                                        <img src="{{asset('')}}UI/img/arrow-black.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>-->


            @foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(8)->get() as $Products)
                <div style="margin-top: 10px;" class="col-md-4 col-sm-6 col-lg-3 col-12">
                    <div class="product-box">
                        <div class="product-info">
                            <div class="product-info-img">
                                <a href="{{asset('')}}{{$Products->Permalink}}">
                                    <img src="{{asset('')}}{{$Products->image->imageurl}}" alt="{{$Products->ImageAltText}}">
                                </a>
                            </div>
                            <h6 class="product-name">
                                <a style="margin-bottom: 0px;color: #d71920;font-weight: 700;font-size: 16px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Model}}</a>
                            </h6>
                            <p>
                                <a style="margin-bottom: 0px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Name}}</a>
                            </p>
                        </div>
                        <div class="p-compare">
                            <div class="form-check">
                                <label class="fomr-chck-label" for="check">
                                    <input id="check" id="p-check" class="form-check-input" type="checkbox">
                                    Add to Compare
                                </label>
                            </div>
                        </div>
                        <div class="plus-arrow">
                            <a href="#THI{{$Products->Model}}" data-toggle="modal">
                                <img src="{{asset('')}}UI/img/plus.png" alt="">
                            </a>
                        </div>
                        <div class="back-arrow">
                            <a href="#">
                                <img src="{{asset('')}}UI/img/arrow-black.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--end products area-->




<!-- Product Modal ---->
@foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(8)->get() as $Products)
<div id="THI{{$Products->Model}}" class="modal fade pr-0" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-title">
                <h5 class="modal-title">Product short description</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!--main product info-->
                <div class="main-product-info p-3">
                    <div class="row">
                        <div style="padding-right: 0px;padding-left: 0px;" class="col-md-5">
                            <div class="mpi-img text-center">
                                <img src="{{asset('')}}{{$Products->image->imageurl}}" class="img-fluid" alt="{{$Products->ImageAltText}}">
                            </div>
                        </div>
                        <div class="col-md-7 card">
                            <div class="mpi-info">
                                <h4> <a style="color:#d30411 !important;margin-bottom: 0px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Model}}</a></h4>
                                <h5> <a style="color:#d30411 !important;margin-bottom: 0px;" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Name}}</a></h5>
                                <div class="short-description">
                                    {!! $Products->ProductShortDescription !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{asset('')}}{{$Products->Permalink}}" class="btn btn-danger btn-sm">See product details →</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Product Modal End-->





<!--start discover area-->
<section class="discover-area clearfix py-4 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ml-1 mb-4">
                    <h4 class="text-custom">Discover Products
                        <div class="next-prev float-right mr-2">
                            <i class="fa fa-angle-left prv-disc ps-control"></i>
                            <i class="fa fa-angle-right nxt-disc ps-control"></i>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="products-box">
                    <div class="discover-slider products-slider-custom">
                        @foreach(App\DiscoverProducts::orderBy('id','DESC')->where('ActiveStatus','1')->get() as $DiscoverProduct)
                        <div class="products-item">
                            <!--dp-items-->
                            <div class="dp-items">
                                <div class="card">
                                    <a href="#">
                                        <div class="card">
                                            <div class="dp-img">
                                                <a href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">
                                                    <img src="{{asset('')}}{{$DiscoverProduct->image->imageurl}}" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="dp-arrow-back">
                                                <a href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">
                                                    <img src="{{asset('')}}UI/img/arrow-black.png" alt="arrow back">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dp-name">
                                            <h4>
                                                <a style="margin-bottom: 0px;color: #787878;" href="{{asset('')}}products/{{$DiscoverProduct->primaryCategoryDetails->CategoryUrl}}">{{$DiscoverProduct->DiscoverName}}</a>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--end discover area-->





<!--start solution area-->
<section class="solution-area clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ml-1 mb-4">
                    <h4 style="color: #555;">Our Solutions
                        <div class="next-prev float-right mr-2">
                            <i class="fa fa-angle-left prv-slsn ps-control slsn-control"></i>
                            <i class="fa fa-angle-right nxt-slsn ps-control slsn-control"></i>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="products-box">
                    <div class="solution-slider products-slider-custom">
                        <!--product-item-->
                        @foreach(App\Solutions::orderBy('id','DESC')->where('ActiveStatus','1')->skip(0)->take(8)->get() as $Solution)
                        <div class="products-item">
                            <!--solution item-->
                            <div class="solution-item">
                                <div class="media">
                                    <a href="{{asset('')}}solutions/{{$Solution->Permalink}}">
                                    <img style="width:40px" class="mr-3 img-fluid" src="{{asset('')}}{{$Solution->featuredimage2->imageurl}}" alt="{{$Solution->ImageAltText}}">
                                    </a>
                                    <div class="media-body">
                                        <h5 style="color: #505050; font-weight: 600" class="mt-0">
                                            <a style="color:#d30411" href="{{asset('')}}solutions/{{$Solution->Permalink}}">{{$Solution->SolutionsName}}</a>
                                        </h5>
                                        <p style="color: #787878;font-size: 14px;text-transform: capitalize;margin-bottom: 5px">{{$Solution->SolutionsName}}</p>
                                        <a style="color: #d71920;" href="{{asset('')}}solutions/{{$Solution->Permalink}}">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end solution area-->





<!--start tainings area-->
<section class="training-area clearfix py-4 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInDown" data-wow-duration="1s">
                <h4 class="text-custom mb-3">Our Certification</h4>
                <div class="our-certification-area">
                    <div class="tn-desc">
                        <div class="card-body">
                            <ul>
                                @foreach(\App\AuthorizationCertificate::orderBy('id','DESC')->where('ActiveStatus','1')->get() as $Certificate)
                                <li>
                                    <h5>{{$Certificate->CertificateName}}</h5>
                                    <p>{{$Certificate->certificatedetails}}<a class="text-custom" href="#"> More</a></p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInDown" data-wow-duration="1s">
                <h4 class="text-custom mb-3">Upcoming Trainings</h4>
                <div class="our-certification-area">
                    <div class="tn-desc">
                        <div style="overflow-y:scroll;max-height: 349px;" class="card-body">
                            <ul>
                                @php
                                  $ActiveTraining =  count(App\Training::where('ActiveStatus',1)->get());
                                @endphp
                                @if($ActiveTraining<1)
                                    <li>
                                        No Training Available Now
                                    </li>
                                @else
                                    @foreach(\App\Training::orderBy('id','DESC')->where('ActiveStatus',1)->get() as $Training)
                                    <li>
                                        <div style="border-bottom: 1px solid grey;padding-bottom: 3px;" class="row">
                                            <div class="col-sm-4 col-5">
                                                <img style="height: 100px;" src="{{asset('')}}{{$Training->featuredimage1->imageurl}}">
                                            </div>
                                            <div class="col-sm-7 col-7">
                                                <h5 style="display: inline-block;">{{$Training->TrainingName}}</h5><br>
                                                <p style="display: inline-block;color:white;" class="btn btn-danger">Date: {{$Training->TrainingDate}}</p>
                                                <p style="display: inline-block;color:white;" class="btn btn-danger">{{$Training->TrainingTime}}</p>
                                                <p>{{$Training->TrainingShortText}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end tainings area-->



<!--start news events area-->
<section class="news-events clearfix py-4 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <!--news slider-->
            @php
                $newscount = App\News::orderBy('id','DESC')->where('ActiveStatus',1)->count();
            @endphp
            @if($newscount>0)
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s">
                    <div class="ml-1 mb-2">
                        <h4 class="text-custom">News
                            <div class="next-prev float-right mr-2">
                                <i class="fa fa-angle-left prv-news ps-control"></i>
                                <i class="fa fa-angle-right nxt-news ps-control"></i>
                            </div>
                        </h4>
                    </div>
                    <div class="news-slider products-slider-custom">
                        <!--products item-->
                        @foreach(\App\News::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(6)->get() as $News)
                            <div class="products-item">
                                <!--news events box-->
                                <div class="news-events-box">
                                    <p class="ne-date">{{$News->created_at}}</p>
                                    <p class="ne-desc">{{str_limit($News->SeoDescription,100)}}</p>
                                    <a class="ne-readmore" href="{{asset('')}}news">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif


            <!--events slider-->
            @php
                $eventscount = App\Events::orderBy('id','DESC')->where('ActiveStatus',1)->count();
            @endphp
            @if($eventscount>0)
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s">
                    <div class="ml-1 mb-2">
                        <h4 class="text-custom">Events
                            <div class="next-prev float-right mr-2">
                                <i class="fa fa-angle-left prv-events ps-control"></i>
                                <i class="fa fa-angle-right nxt-events ps-control"></i>
                            </div>
                        </h4>
                    </div>
                    <div class="events-slider products-slider-custom">
                        @foreach(\App\Events::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(6)->get() as $Events)
                            <div class="products-item">
                                <!--news events box-->
                                <div class="news-events-box">
                                    <p class="ne-date">{{$Events->created_at}}</p>
                                    <p class="ne-desc">{{str_limit($Events->SeoDescription,100)}}</p>
                                    <a class="ne-readmore" href="#">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!--end news events area-->



@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
