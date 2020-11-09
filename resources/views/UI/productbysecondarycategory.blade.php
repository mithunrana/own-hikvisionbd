@php
    $SiteProfile = App\SiteProfile::first();
    $title = $Category->CategoryBrowserTitle;
    $keywords =  $Category->CategorySeoKeyword;
    $description = $Category->CategorySeoDescription;
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
                    <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
                    <li class="breadcrumb-item active">{{$Category->CategoryName}}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 no-padding left-bar">
                <a class="main-cat cat-btn"><i class="fa fa-bars"></i> Categories</a>
                <div class="product-category">
                    <div class="pc-title">
                        <h4>Categories</h4>
                    </div>
                    @include('UI.inc.categorysidebar')
                </div>
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">
                <div class="main-product-right card">
                    <h1 style="font-size: 23px;margin-bottom: 8px;" class="proname">{{$Category->SeoHeading}}</h1>
                    @if(isset($MegaPixel))
                        <div class="row">
                            @foreach($MegaPixel as $Pixel)
                                <a href="{{asset('')}}mega-pixel/{{$Pixel->MegaPixelUrl}}" style="text-decoration: none;color: #d71920;margin-top: 6px;margin-bottom: 6px;margin-left: 8px;">
                                    <p style="border: 1px solid grey;padding: 8px;margin-bottom:0px;margin-right: 15px;">{{$Pixel->MegaPixel}}</p>
                                </a>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        @foreach($Products as $SingleProduct)
                            <div class="col-md-4 padding-pro">
                                <div class="product-box no-margin">
                                    <div class="product-info">
                                        <div class="product-info-img">
                                            <a href="{{asset('')}}{{$SingleProduct->Permalink}}">
                                                <img src="{{asset('')}}{{$SingleProduct->image->imageurl}}" alt="{{$SingleProduct->ImageAltText}}">
                                            </a>
                                        </div>
                                        <h6 class="product-name">
                                            <a style="margin-bottom: 0px;color: #d71920;font-weight: 700;font-size: 16px;" href="{{asset('')}}{{$SingleProduct->Permalink}}">{{$SingleProduct->Model}}</a>
                                        </h6>
                                        <p>
                                            <a style="margin-bottom: 0px;" href="{{asset('')}}{{$SingleProduct->Permalink}}">{{$SingleProduct->Name}}</a>
                                        </p>
                                    </div>
                                    <div class="p-compare">
                                        @if($SingleProduct->PriceStatus == '1')
                                            <ins style="font-size: 16px;background: #fff;color: #d71920;font-weight: 600;margin-right: 10px;text-decoration: none;">{{$SingleProduct->CurrentPrice}}৳</ins>
                                        @else
                                            <ins style="font-size: 16px;background: #fff;color: #d71920;font-weight: 600;margin-right: 10px;text-decoration: none;">Call For Price</ins>
                                        @endif
                                    </div>
                                    <div class="plus-arrow">
                                        <a href="#THI{{$SingleProduct->id}}" data-toggle="modal">
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

                    <div style="margin-top: 10px; margin-bottom: 10px;" class="">
                        {{$Products->links()}}
                    </div>
                    <div style="padding: 15px;" class="CategoryDetails">
                        {!! html_entity_decode($Category->CategoryDetails) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--end main product area-->


<!-- Product Modal ---->
@foreach($Products as $SingleProduct)
    <div id="THI{{$SingleProduct->id}}" class="modal fade pr-0" role="dialog">
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
                                    <img src="{{asset('')}}{{$SingleProduct->image->imageurl}}" class="img-fluid" alt="{{$SingleProduct->ImageAltText}}">
                                </div>
                            </div>
                            <div class="col-md-7 card">
                                <div class="mpi-info">
                                    <h4> <a style="color:#d30411 !important;margin-bottom: 0px;" href="{{asset('')}}{{$SingleProduct->Permalink}}">{{$SingleProduct->Model}}</a></h4>
                                    <h5> <a style="color:#d30411 !important;margin-bottom: 0px;" href="{{asset('')}}{{$SingleProduct->Permalink}}">{{$SingleProduct->Name}}</a></h5>
                                    <div class="short-description">
                                        {!! $SingleProduct->ProductShortDescription !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{asset('')}}{{$SingleProduct->Permalink}}" class="btn btn-danger btn-sm">See product details →</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- Product Modal End-->



<!--start footer area-->
@include('UI.inc.footerbar')
<!--end footer area-->

<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')
</body>
</html>