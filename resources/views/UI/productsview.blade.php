@php
    $SiteProfile = App\SiteProfile::first();
@endphp


@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->



<!--start main product area-->
<section class="main-product clearfix py-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col wow fadeInDown" data-wow-duration="1s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a style="color:red;" href="{{asset('')}}">Home</a></li>
                    <li class="breadcrumb-item"><a style="color:red;" href="{{asset('')}}products">Products</a></li>
                    <li class="breadcrumb-item active">{{$Product->Model}}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 no-padding left-bar">
                <a class="main-cat cat-btn"><i class="fa fa-bars"></i> Categories</a>
                <div class="product-category ">
                    <div class="pc-title">
                        <h4>Categories</h4>
                    </div>
                    @include('UI.inc.categorysidebar')
                </div>
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">
                <div class="main-product-right card" style="border-radius: 0;">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pd-img card text-center" style="border-radius:0; padding: 100px 40px;">
                                <img src="{{asset('')}}{{$Product->image->imageurl}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="short-desc">
                                <h1 style="font-size: 19px;">{{$Product->SeoHeading}}</h1>
                                <h2 style="font-size: 20px;color:red;">{{$Product->Model}}</h2>
                                <p class="text-custom">{{$Product->Name}}</p>
                                <hr>
                                <h5>Key Features</h5>
                                <div itemprop="description" class="short-description">
                                    {!! html_entity_decode($Product->ProductShortDescription) !!}
                                </div>

                                @if(Auth::check() && Auth::user()->partner=='yes')
                                    <div class="price-wrap">
                                        <ins style="font-size: 24px;color: #d71920;font-weight: 600;margin-right: 10px;text-decoration: none;">{{$Product->PartnerPrice}} <span style="font-size: 11px;color: #079eec;text-transform: uppercase;font-weight: 600;">Dealer Price</span></ins>
                                        <div  class="special-label"></div>
                                    </div>
                                @endif
                                @if($Product->PriceStatus == 1)
                                <div class="price-wrap">
                                    <ins style="font-size: 24px;color: #d71920;font-weight: 600;margin-right: 10px;text-decoration: none;">{{$Product->CurrentPrice}}</ins>
                                    Regular Price: <del style="color:red;">{{$Product->RegularPrice}}</del>
                                    <div style="    font-size: 11px;color: #079eec;text-transform: uppercase;font-weight: 600;" class="special-label">Cash Discount Price</div>
                                </div>
                                @endif
                                @if($Product->Datasheet !== '#')
                                    <a class="btn btn-danger" href="{{asset('')}}{{$Product->Datasheet}}">Download Datasheet</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-specification card main-product-details" style="border-radius: 0;padding:2px;margin-top: 15px;">
                    {!! html_entity_decode($Product->Specification) !!}
                </div>

                <div style="margin-top: 10px;margin-bottom: 10px;" class="embedded-tutorial-view video-wrapper">
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/zLX-Af2CRi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>

            </div>
        </div>
    </div>
</section>
<!--end main product area-->


<!--start footer area-->
@include('UI.inc.footerbar')
<!--end footer area-->

<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')
</body>
</html>
