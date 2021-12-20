@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Contact";
     $keywords =  "contact, hikvision, bangladesh, cctv, camera, nvr, dvr, access control, price, bd, hikvision support bangladesh, hikvision support bangladesh, hikvision dvr price in bd,tech help info, career hikvision, bangladesh";
     $description = "For hikvision support and product price in bangladesh contact: 01836375309";
@endphp

@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->

<!--start login form area-->
<section class="login-form-area clearfix py-5 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <b>Successfully</b> Send Your Query As Soon As Possible We Contact With You....!
            </div>
        @endif
        <div class="contact-form">
            <div class="row">
                <div style="background-color:#ededed;margin-top: 10px;padding: 10px 10px;" class="col-md-9 col-sm-8 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4 style="color: #d71920;font-size: 18px;" class="red-txt">Contact us for your Inquiry</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div id="scf-form-contactForm">
                        <form method="POST" action="{{url('contact')}}" accept-charset="UTF-8" class="">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="name">Your Name
                                        @if($errors->has('name'))
                                            <small style="color:red;"> {{$errors->first('name')}}</small>
                                        @endif
                                    </label>
                                    <input id="name" name="name" class="form-control" value="{{old('name')}}" type="text" style="margin-bottom:6px">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="company_name">Company Name</label>
                                    <input id="company_name" name="company_name" class="form-control" value="{{old('company_name')}}" type="text" style="margin-bottom:6px">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="phone_no">Phone No.
                                        @if($errors->has('phone_no'))
                                            <small style="color:red;"> {{$errors->first('phone_no')}}</small>
                                        @endif
                                    </label>
                                    <input id="phone_no" name="phone_no" class="form-control" value="{{old('phone_no')}}" type="text" style="margin-bottom:6px">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="email">Email Address
                                        @if($errors->has('email'))
                                            <small style="color:red;"> {{$errors->first('email')}}</small>
                                        @endif
                                    </label>
                                    <input id="email" name="email" class="form-control" value="{{old('email')}}" type="text" style="margin-bottom:6px">
                                    </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="web_page">Web Page</label>
                                    <input id="web_page" name="web_page" class="form-control" value="{{old('web_page')}}" type="text" style="margin-bottom:6px">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="country">Country
                                        @if($errors->has('country'))
                                            <small style="color:red;"> {{$errors->first('country')}}</small>
                                        @endif
                                    </label>
                                    <input id="country" name="country" class="form-control" value="{{old('country')}}" type="text" style="margin-bottom:6px">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 ">
                                    <label class="control-label required" for="city">City</label>
                                    <input id="job_title" name="job_title" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <label class="control-label " for="address">Address
                                        @if($errors->has('address'))
                                            <small style="color:red;"> {{$errors->first('address')}}</small>
                                        @endif
                                    </label>
                                    <input id="address" name="address" class="form-control" value="{{old('address')}}" type="text" style="margin-bottom:6px">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="zip_code">Zip Code</label>
                                    <input id="zip_code" name="zip_code" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4 col-sm-4 col-xs-12 ">
                                    <label class="control-label " for="enquiry_type">Enquiry Type
                                        @if($errors->has('enquiry_type'))
                                            <small style="color:red;"> {{$errors->first('enquiry_type')}}</small>
                                        @endif
                                    </label>
                                    <select id="enquiry_type" name="enquiry_type" class="form-control">
                                        <option value="">Select Enquiry Type</option>
                                        <option value="job_enquiry">Job Enquiry</option>
                                        <option value="product_quality">Product Quality</option>
                                        <option value="technical_support">Technical Support</option>
                                        <option value="sales">Sales</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="website">Website</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <label class="control-label " for="message">Message/Query
                                        @if($errors->has('usermessage'))
                                            <small style="color:red;"> {{$errors->first('usermessage')}}</small>
                                        @endif
                                    </label>
                                    <textarea placeholder="Type Your Query.." id="message" name="usermessage" class="form-control" value="" type="text" style="margin-bottom:6px">{{old('usermessage')}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div id="submit-wrapper" class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <button type="submit" class="btn btn-danger">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="background-color: #6d6e71;color:white;margin-top: 10px;padding-top: 10px;" class="col-md-3 col-sm-4 col-xs-12 address-block">
                    <h4 style="font-size: 20px;">{{$SiteProfile->SiteName}} </h4>
                    <ul style="list-style: none;padding-left:0px;" class="list">
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-map-marker"></span></div>
                            <p>{{$SiteProfile->CorporateAddress}}</p>
                        </li>
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-phone"></span></div>
                            <p>{{$SiteProfile->CorporatePhone}}</p>
                        </li>
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-envelope"></span></div>
                            <p>{{$SiteProfile->CorporateEmail}}</p>
                        </li>
                    </ul>
                    <h4>Local Address</h4>
                    <ul style="list-style: none;padding-left:0px;" class="list">
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-map-marker"></span></div><p>{{$SiteProfile->HeadAddress}}</p>
                        </li>
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-phone"></span></div><p>{{$SiteProfile->Phone1}}</p>
                        </li>
                        <li style="display: block;margin-bottom: 8px;position: relative;padding-left: 28px;">
                            <div style="position: absolute;left: 0;font-size: 18px;" class="icon"><span class="fa fa-envelope"></span></div><p>{{$SiteProfile->Email2}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end login form area-->

@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
