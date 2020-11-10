@php
    $SiteProfile = App\SiteProfile::first();
    $title = $HighLights->BrowserTitle;
    $keywords = $HighLights->SeoKeyword;
    $description = $HighLights->SeoDescription;
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
                    <li class="breadcrumb-item active">Support</li>
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
            <div style="background-color: white;" class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
                <div class="row">
                    <h3 style="background-color: #d71920;color: white;margin-bottom: 0;border-radius: 4px;padding: 3px;width: 100%;">Software / Firmware</h3>
                    <ul style="width: 100%;" class="list-group">
                        @foreach(\App\SoftwareList::orderBy('id','DESC')->where('ActiveStatus',1)->get() as $Software)
                            <li class="list-group-item">
                                <a target="_blank" style="color: #337ab7;text-decoration: none;font-weight: bold;" href="{{$Software->DownloadLink}}" >{{$Software->SoftwareName}}</a>
                                <a style="float: right;color:white;" class="btn btn-danger" href="{{$Software->DownloadLink}}" download>Download</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div style="background-color: white;padding: 4px;" class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                <h3 style="background-color: #d71920;color: white;margin-bottom: 0;border-radius: 4px;padding: 3px;width: 100%;">Video Tutorial</h3>
                <div style="margin-top: 10px;margin-bottom: 10px;" class="embedded-tutorial-view">
                   {!! html_entity_decode($HighLights->EmbeddedVideo) !!}
                </div>
                <div class="info-box">
                    <div style="border-bottom: 1px solid red;" class="title-box">
                        <h1 style="font-size:25px;font-weight: 800;text-transform: uppercase;margin-bottom: 0px;letter-spacing: 3px;">{{$HighLights->BlogName}}</h1>
                    </div>
                    {!!html_entity_decode($HighLights->BlogDetails)!!}
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
