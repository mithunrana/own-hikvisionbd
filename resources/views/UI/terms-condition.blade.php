@php
    $SiteProfile = App\SiteProfile::first();
@endphp
@php
    $title = "About Us";
    $keywords =  "about us, tech help info contact number, tech help info office address, tech help info mobile number, tech help info address, address, software company BD, software company bangladesh,
    software company bangladesh contact number, about tech help info";
    $description =  "About Tech Help Info, Tech Help Info Best Software Company In Bangladesh, Provide, CCTV, SOFTWARE, NEWS, JOBS";
@endphp

@include('UI.inc.headersource')
@include('UI.inc.menubar')

<div class="container-fluid">
    <nav style="margin-top: 10px;border-bottom: 0px;" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">General Terms Of Use</li>
        </ol>
    </nav>
</div>


<div class="container">
    <div style="padding: 20px" class="terms-box">
        <div class="row">
            <p style="font-size: 1rem;line-height: 1.38;text-align: center;color: #505050;margin: 0;padding: 0;text-align: left;">
                These General Terms of Use (“Terms”) governs your access to and use of the website (www.hikvisionbd.com)
                and its sub-sites (collectively the “Site”) provided and administered by
                <a href="https://www.techhelpinfo.com/">Tech Help Info</a> Group Of Company. and its affiliates (“Hikvision”, “we”, “our”, or “us”).<br><br>
                Please read these Terms carefully. By accessing the Site you acknowledge that you have read, understood and agreed to these Terms.
                In case you do not understand or agree to any of these Terms, you should immediately exit the Site.
            </p><br><br>

            <div style="" class="terms-content-box">
                <h5>1. Changes to the Terms or Site</h5>
                <p style="text-align: left;">HIKVISION reserves the right, at its discretion, to modify these Terms, provided certain provisions of these Terms
                    prove to be incomplete or outdated and further provided that these modifications are reasonable for you, taking into account your interests.
                </p>
            </div>

            <div style="" class="terms-content-box">
                <h5>2. Privacy</h5>
                <p style="text-align: left;">This site content manage by Tech Help Info Group Of Company. Tech Help Info Privacy Policy is applicable to the user of personal
                    information on or through the Site. By using the Site, you agree that HIKVISIONBD.COM can
                    use such information in accordance with this Privacy Policy.
                </p>
            </div>

            <div style="" class="terms-content-box">
                <h5>3. Product Availability</h5>
                <p style="text-align: left;">The availability of the products and services described on the Site,
                    and the descriptions of such products and services, may vary in On our stock. Please contact on our office for product stock query and/or services information
                </p>
            </div>

            <div style="" class="terms-content-box">
                <h5>4. Links to Third Parties</h5>
                <p style="text-align: left;">
                    Although links to third party websites may
                    be contained in the Site for your convenience, HIKVISIONBD.COM Or Tech Help Info shall not be responsible for any content of any such websites. You might need to review and agree
                    to applicable rules of use when using such
                    websites. In addition, a link to third-party website does not imply that HIKVISIONBD.COM Or Tech Help Info endorses the website or the products or services referenced therein.
                </p>
            </div>

            <div style="" class="terms-content-box">
                <h5>4. Contact Us</h5>
                <p style="text-align: left;">
                    Should you have any questions, please contact us immediately via email at techhelpinfobd@gmail.com
                </p>
            </div>
        </div>
    </div>
</div>
@include('UI.inc.footerbar')
@include('UI.inc.footersource')
</body>
</html>