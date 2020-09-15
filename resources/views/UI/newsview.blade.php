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
                    <li class="breadcrumb-item active">{{$News->NewsName}}</li>
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
                        {{$News->NewsName}}
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
            <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
               <img src="{{asset('')}}{{$News->featuredimage1->imageurl}}">
               {!! html_entity_decode($News->ProjectDetails) !!}
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                <div class="row">
                    @foreach($RelatedNews as $Newss)
                    <div class="col-sm-12">
                        <a href="{{$Newss->Permalink}}">
                        <img src="{{asset('')}}{{$Newss->featuredimage1->imageurl}}">
                        </a>
                        <p><a style="color:#d71920;font-size: 20px;" href="{{$Newss->Permalink}}">{{$Newss->NewsName}}</a></p>
                    </div>
                   @endforeach
                </div>
            </div>
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
