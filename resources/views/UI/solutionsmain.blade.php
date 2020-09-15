@php
    $SiteProfile = App\SiteProfile::first();
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
                    <li class="breadcrumb-item active">Solution</li>
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
                    <h3 class="mb-4" style="color: #555;">Hikvision is the world's largest supplier of Solutions</h3>
                    <br style="color: #555;">
                        To compete and thrive in today’s crowded markets, businesses and institutions need to work smarter.
                        Based on a technology called Deep Learning, Artificial Intelligence (AI) ‘trains’ computers to do tasks
                        faster and better than people previously could. For example, in the application of video technology, AI makes
                        it possible for security and business systems to recognise people, vehicles, as well as identify customer interests,
                        and certain scenarios that used to have human oversight like shelf items running out of stock, and more.</br>
                        This capability means that it’s now possible to automate many key surveillance tasks and business processes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end page header area-->

<!--start solution area-->
<section class="main-solution-area solution-area clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="text-align: center; margin: 20px 0; margin-top: 0px; font-size: 32px; font-weight: 400;">Hikvision Solutions</h3>
            </div>
        </div>
        <div class="row">
            @foreach(\App\Solutions::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(9)->get() as $Solution)
            <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box sh-solution">
                    <div class="sh-img sh-img-solution">
                        <a href="{{asset('')}}solutions/{{$Solution->Permalink}}">
                            <img src="{{asset('')}}{{$Solution->featuredimage1->imageurl}}" class="img-fluid" alt="{{$Solution->ImageAltText}}">
                        </a>
                        <h5 style="margin-top: 5px;margin-left: 5px;" class="text-custom">
                            <a style="color:#d30411" href="{{asset('')}}solutions/{{$Solution->Permalink}}">{{$Solution->SolutionsName}}</a>
                        </h5>
                    </div>
                    <div class="sh-txt sh-txt-solution">
                        <a style="color:#d30411" href="{{asset('')}}solutions/{{$Solution->Permalink}}">Learn More →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end solution area-->


@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
