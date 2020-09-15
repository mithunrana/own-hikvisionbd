@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Success History Hikvision Bangladesh | Mega Trading";
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
                    <li class="breadcrumb-item">
                        <a href="{{asset('')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{asset('')}}solutions">Solution</a>
                    </li>
                    <li class="breadcrumb-item active">{{$Solution->SolutionsName}}</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<!--start success history header area-->
<section class="success-history-header clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sh-header-img">
                    <h1 class="mb-4" style="color: #555;">
                        {{$Solution->SolutionsName}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end success history header area-->


<!--start success history area-->
<section class="success-history clearfix pb-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div style="margin-top: 10px;" class="row">
            <div class="col-sm-5 col-12 col-lg-5 col-md-4 col-xl-4">
                <div class="row">
                    <img src="{{asset('')}}{{$Solution->featuredimage1->imageurl}}">
                </div>
            </div>
            <div class="col-sm-7 col-12 col-lg-7 col-md-8 col-xl-8">
                <div style="padding-left: 10px;" class="row">
                {!! html_entity_decode($Solution->SolutionShortText) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="margin-top: 10px;" class="row">
            {!! html_entity_decode($Solution->SolutionsDetails) !!}
        </div>
    </div>
</section>
<!--end success history area-->


@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
