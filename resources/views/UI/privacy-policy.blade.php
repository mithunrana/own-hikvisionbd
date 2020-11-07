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
                <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>
</div>


<div class="container">
    <div class="row">
        <div style="padding: 20px;" class="for-design">
        <div class="">
            <h2 style="margin-top: 0px;">
                <b style="color:#fb4343;">Our Commitment To Privacy:</b>
            </h2>
            <p style="margin-top: 0px;">
                visitor security is our first priority. To better protect your privacy we provide
                this notice explaining our online information practices
                and the choices you can make about the way your information is collected and used.
            </p>
        </div>

        <div class="">
            <h2 style="margin-top: 0px;">
                <b style="color:#fb4343;">Our Commitment To Privacy:</b>
            </h2>
            <p style="margin-top: 0px;">
                This notice applies to all information collected or submitted on this website.
                On some pages, you can register to access secured features on the site.
                The types of personal information collected at these pages are:<br>

                Name Address (optional)<br>
                Email address<br>
                Phone number <br>
                country(optional)
            </p>
        </div>


        <div class="">
            <h2 style="margin-top: 0px;">
                <b style="color:#fb4343;">The Information We DONT Collect</b>
            </h2>
            <p style="margin-top: 0px;">
                Credit/Debit Card Information and other top secret information don't collect
            </p>
        </div>


        <div class="">
            <h2 style="margin-top: 0px;">
                <b style="color:#fb4343;">The Way We Use Information</b>
            </h2>
            <p style="margin-top: 0px;">
                We do not share or trade your information with any parties. We use return email addresses
                to answer the email we receive. Such addresses
                are not used for any other purpose and are not shared with outside parties.</br>

                You can register with our website if you would like to receive updates on our new services.
                Information you submit on our website will not be used for this purpose unless you fill out the registration form.</br>
                Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above without also providing
                you an opportunity to opt-out or otherwise prohibit such unrelated uses.
            </p>
        </div>

        <div class="">
            <h2 style="margin-top: 0px;">
                <b style="color:#fb4343;">How To Contact Us</b>
            </h2>
            <p style="margin-top: 0px;">
                Should you have other questions or concerns about these privacy policies, please <a href="{{asset('')}}contact">contact us.</a>
            </p>
        </div>
        </div>
    </div>
</div>
@include('UI.inc.footerbar')
@include('UI.inc.footersource')
</body>
</html>