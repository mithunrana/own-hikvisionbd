@php
    $SiteProfile = App\SiteProfile::first();
    $title = $Solution->BrowserTitle;
    $keywords =  $Solution->SeoKeyword;
    $description = $Solution->SeoDescription;
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
    <div style="margin-top: 10px;" class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-12">
                    <div class="solution-image-box">
                         <img style="width: 100%;" src="{{asset('')}}{{$Solution->featuredimage1->imageurl}}">
                    </div>
                    <div class="solution-content-box">
                        {!! html_entity_decode($Solution->SolutionsDetails) !!}
                    </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-12">
                <div class="row">
                    @foreach(\App\Solutions::orderBy('id','DESC')->skip(0)->take(6)->get() as $RelatedSolution)
                        <div style="margin-top: 10px" class="col-lg-12 col-6 col-sm-6 col-md-6 related-solution-box">
                            <a href="{{asset('')}}solutions/{{$RelatedSolution->Permalink}}">
                                <img src="{{asset('')}}{{$RelatedSolution->featuredimage1->imageurl}}">
                            </a>
                            <a href="{{asset('')}}solutions/{{$RelatedSolution->Permalink}}">
                                <h4 style="margin-top: 3px;margin-bottom: 3px;color: grey;">{{$RelatedSolution->SolutionsName}}</h4>
                            </a>
                            </a>
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
