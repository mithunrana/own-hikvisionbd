@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "About | Tech Help Info";
    $keywords =  "hikvision, bangladesh, cctv, camera, nvr, dvr, access control, price, bd, hikvision support bangladesh, hikvision support bangladesh, hikvision dvr price in bd,tech help info";
    $description = "tech help info is the it solution company in bangladesh, provide all kinds of it solutions in bangladesh";
@endphp

@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->

<!--start mega trading header area-->
<section class="mega-trading-header clearfix py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mt-header-img wow fadeInDown" data-wow-duration="1s">
                    <img style="width: 100%;" src="{{asset('')}}UI/images/support.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col wow fadeInDown" data-wow-duration="1s">
                <ol class="breadcrumb mb-0 mt-2">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
                    <li class="breadcrumb-item active">About Tech Help Info</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--end mega trading header area-->


<!--start mega trading area-->
<section class="mega-trading clearfix pb-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mt-box card-body card" style="border-radius: 0;">
                    <div class="row">
                        <div class="col">
                            <div class="mt-header">
                                <h3 class="text-custom">Tech Help Info</h3>
                                <p>Tech Help Info is the best it solutions company in bangladesh provide all kinds of IT Solutions & Product, Security system supplier in bangladesh. We sell innovative video surveillance Products CCTV Camera, NVR, DVR, Network camera, Analog Camera.we are committed with all time support service..</p>
                            </div>
                        </div>
                    </div>
                    <div class="mega-trading-item mt-4" style="border-bottom: 2px solid #d30411;padding: 0 20px;">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mt-txt pr-2">
                                    <h4>Good technical support:</h4>
                                    <p style="font-size: 14px;">Our technician is usually out there over the phone or in saleroom to answer any queries that client might need. we have a tendency to even have product specifications area unit created out there to transfer.</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mt-img">
                                    <img src="{{asset('')}}UI/images/service.jpg" class="img-fluid mb-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mega-trading-item mt-4" style="border-bottom: 2px solid #d30411;padding: 0 20px;">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mt-txt pr-2">
                                    <h4>Quality product:</h4>
                                    <p style="font-size: 14px;">We use our 3 years of in depth technical experience and knowledge to pick and style the most effective value quality product for our customer. All our product bear internal control before commerce to customer</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mt-img">
                                    <img src="{{asset('')}}UI/images/mega-trading-quality.jpg" class="img-fluid mb-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mega-trading-item mt-4" style="border-bottom: 2px solid #d30411;padding: 0 20px;">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mt-txt pr-2">
                                    <h4><a style="color:darkred" href="https://www.techhelpinfo.com/about">Mission Tech Help Info</a></h4>
                                    <p style="font-size: 14px;">Our main concern are security & Eliminate unemployment. cause Tech Help Info want unemployment Get away from our country. by security service we protect our country and prevent crime.</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mt-img">
                                    <img src="{{asset('')}}UI/images/mega-trade-mission.jpg" class="img-fluid mb-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mega-trading-item mt-4" style="border-bottom: 2px solid #d30411;padding: 0 20px;">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mt-txt pr-2">
                                    <h4><a style="color:darkred" href="https://www.techhelpinfo.com/about"> Vission  Tech Help Info></a></h4>
                                    <p style="font-size: 14px;">We are committed to explore creative ways to better perceive and understand our world. and we make the world secure and user friendly can user use the technolgy very easily</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mt-img">
                                    <img src="{{asset('')}}UI/images/mega-trade-vission.jpg" class="img-fluid mb-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--end mega trading area-->


@include('UI.inc.footerbar')

<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
