@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Career Hikvision Bangladesh";
     $keywords =  "hikvision, bangladesh, cctv, camera, nvr, dvr, access control, price, bd, hikvision support bangladesh, hikvision support bangladesh, hikvision dvr price in bd,tech help info, career hikvision, bangladesh";
     $description = "Career Hikvision In Bangladesh, CCTV Surveillance hikvision cctv camera, For hikvision product price in bangladesh contact: 01836375309";
@endphp

@include('UI.inc.headersource')

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
                    <li class="breadcrumb-item active">Career</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--start page header area-->
<section class="success-history-header clearfix wow fadeInDown"  data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sh-header-img">
                    <h3 class="mb-4" style="color: #555;">Career Hikvision | Work With Us</h3>
                    <p style="color: #555;">Mega Trading Ltd. is a Joint Venture with world's No.1 Security surveillanceproduct manufacturer Hangzou Hikvision Digital Technology Ltd.in Bangladesh.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end page header area-->

<!--start career bg area-->
<section class="career-bg clearfix py-4 my-5 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="career-txt card-body">
                    <p class="text-gray text-justify" style="line-height: 28px;">We are pioneers in introducing latest technology in police investigation trade and therefore the leading organizations of the trade in Asian nation. Unicode Technology has been promoted by extremely qualified technocrats with wealthy expertise in police investigation and security trade. With commitment to produce top quality and reliable merchandise with glorious unmatched technical support, Unicode Technology Pvt Ltd. serves to an outsized loyal network of dealers and system integrators all across Asian nation. we have a tendency to believe that quality merchandise and services can cause terribly high levels of client satisfaction, retention and acquisition.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end career bg area-->

<!--start career txt area-->
<section class="career-txt clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="career-txt-box">
                    <p class="text-gray text-justify">Hikvision Digital Technology Co. Ltd is the world's driving providers of video reconnaissance items and arrangements. Set up in 2001, Hikvision has developed from a little organization of just 28 representatives, into a worldwide undertaking with in excess of 5,000 workers, including 1,400 R&D engineers. With the biggest R&D group in the business and the capacity for consistent advancement,</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="career-txt-box">
                    <p class="text-gray text-justify">Hikvision offers merchandise as well as hybrid DVRs, NVRs, standalone DVRs, digital video servers, compression cards, high-definition information science cameras, and speed domes. These merchandise ar utilized in quite a hundred countries and are wont to secure numerous security applications round the world. For a lot of info please visit Hikvision's web site at <a href="#">www.hikvision.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end career txt area-->

<!--start career big image area-->
<section class="career-big-image clearfix py-4 wow fadeInDown" data-wow-duration="1s">
    <div class="custom-width" style="width: 90%;margin: 0 auto;">
        <div class="row">
            <div class="col">
                <div class="career-big-image-img">
                    <img src="images/career-banner.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="container wow fadeInDown" data-wow-duration="1s">
            <div class="row">
                <div class="col">
                    <div class="career-big-image-txt">
                        <p class="text-gray text-center mt-5" style="line-height: 28px;">Headquartered in city, China, Hikvision has expanded into a worldwide operation with regional branch offices in l. a. covering the Americas; Dutch capital covering Europe; and port for the center East. There ar joint ventures in Bangldesh and Russia, likewise as a maintenance center in city.Rapid growth and exceptional merchandise have seen Hikvision recognized because the much loved DVR provider in line with IMS Research's 'World marketplace for CCTV and Video police investigation instrumentation Report 2011', and listed for 3 years during a row in 'Security fifty' - a market survey recognizing the highest 50 security vendors within the international security market (number ten in 2010). Hikvision is currently publically listed on the Shenzhen stock market with a capitalization of $US vi.5 billion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end career big image area-->


@include('UI.inc.footerbar')

<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
