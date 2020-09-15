@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('Admin.inc.adminHeader')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.inc.adminSideBar')
<!-- Main Sidebar Container -->
    <div class="content-wrapper">
        <section id="app" style="margin-top:10px;" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Site Profile</div>
                        <div class="card-body">
                            <form action="{{url('admin/siteprofile-update')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="SiteName">Site Name:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('SiteName') ? ' is-invalid' : ''}}" @isset($SiteProfile->SiteName)value="{{$SiteProfile->SiteName}}"@endisset name="SiteName" placeholder="Enter Site Name " id="SiteName">
                                        </div>
                                        <div class="form-group">
                                            <label for="EditorPublisher">Editor Publisher Name :</label>
                                            <input style="border: 1px solid #586bde;"  type="text" class="form-control{{$errors->has('EditorPublisher') ? ' is-invalid' : ''}}" @isset($SiteProfile->EditorPublisher) value="{{$SiteProfile->EditorPublisher}}"@endisset name="EditorPublisher" placeholder="Enter Editor Publisher Name"  id="EditorPublisher">
                                        </div>
                                        <div class="form-group">
                                            <label for="CorporateAddress">Corporate Address :</label>
                                            <textarea style="border: 1px solid #586bde;"  type="text" class="form-control{{$errors->has('CorporateAddress') ? ' is-invalid' : ''}}" name="CorporateAddress" placeholder="Enter Corporate Address" id="CorporateAddress">@isset($SiteProfile->CorporateAddress){{$SiteProfile->CorporateAddress}}@endisset</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="HeadAddress">Headquarters Address :</label>
                                            <textarea style="border: 1px solid #586bde;"  type="text" class="form-control{{$errors->has('HeadAddress') ? ' is-invalid' : ''}}" name="HeadAddress" placeholder="Enter Headquarters Address" id="HeadAddress">@isset($SiteProfile->HeadAddress){{$SiteProfile->HeadAddress}}@endisset</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoKeyword">Corporate Phone:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Corporate Phone Numer" @isset($SiteProfile->CorporatePhone)value="{{$SiteProfile->CorporatePhone}}"@endisset name="CorporatePhone" id="CorporatePhone">
                                        </div>
                                    </div>


                                    <input type="hidden" @isset($SiteProfile->MainLogo)value="{{$SiteProfile->MainLogo}}"@endisset name="MainLogo" id="setimageid"/>
                                    <input type="hidden" @isset($SiteProfile->MainLogoTitleText)value="{{$SiteProfile->MainLogoTitleText}}"@endisset name="MainLogoTitleText" id="setImageTitleText"/>
                                    <input type="hidden" @isset($SiteProfile->MainLogoAltText)value="{{$SiteProfile->MainLogoAltText}}"@endisset  name="MainLogoAltText" id="setImageAltText"/>


                                    <div class="col-sm-4">
                                        <img style="max-width: 100%;" id="previewImage" @isset($SiteProfile->MainLogo)src="{{asset('')}}{{$SiteProfile->logo->imageurl}}"@endisset src="{{asset('images')}}/default-image.png">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage1" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-sm-6">
                                        <label for="CopyRightText">Copyright:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Copy Right Text" @isset($SiteProfile->CopyRightText)value="{{$SiteProfile->CopyRightText}}"@endisset name="CopyRightText" id="CopyRightText">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="DomainName">Domain Name:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Domain Name" @isset($SiteProfile->DomainName)value="{{$SiteProfile->DomainName}}"@endisset name="DomainName" id="DomainName">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="DesignerDeveloperName">Designer & Developer Name:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Designer & Developer Name" @isset($SiteProfile->DesignerDeveloperName)value="{{$SiteProfile->DesignerDeveloperName}}"@endisset name="DesignerDeveloperName" id="DesignerDeveloperName">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="DesignerDeveloperDomain">Designer & Developer Domain:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Designer Developer Domain Name" @isset($SiteProfile->DesignerDeveloperDomain)value="{{$SiteProfile->DesignerDeveloperDomain}}"@endisset name="DesignerDeveloperDomain" id="DesignerDeveloperDomain">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="Phone1">Phone 1:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Phone Number1" @isset($SiteProfile->Phone1)value="{{$SiteProfile->Phone1}}"@endisset name="Phone1" id="Phone1">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="Phone1">Phone 2:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Phone Number2" @isset($SiteProfile->phone2)value="{{$SiteProfile->phone2}}"@endisset name="phone2" id="Phone2">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="Phone1">Phone 3:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Phone Number3" @isset($SiteProfile->phone3)value="{{$SiteProfile->phone3}}"@endisset name="phone3" id="Phone3">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="CorporateEmail">Corporate Email:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Corporate Email" @isset($SiteProfile->CorporateEmail)value="{{$SiteProfile->CorporateEmail}}"@endisset name="CorporateEmail" id="CorporateEmail">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="Email2">Email 2:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Email2" @isset($SiteProfile->Email2)value="{{$SiteProfile->Email2}}"@endisset name="Email2" id="Email2">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="Email3">Email 3:</label>
                                        <input style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Email3" @isset($SiteProfile->Email3)value="{{$SiteProfile->Email3}}"@endisset name="Email3" id="Email3">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="GoogleMap">Google Map Location :</label>
                                        <textarea rows="4" style="border: 1px solid #586bde;"  type="text" class="form-control{{$errors->has('GoogleMap') ? ' is-invalid' : ''}}" name="GoogleMap" placeholder="Enter Google Map Address" id="GoogleMap">@isset($SiteProfile->GoogleMap){{$SiteProfile->GoogleMap}}@endisset</textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="shortdescription">Short Description:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" rows="7" placeholder="Enter Short Description" name="ShortDescription" >@isset($SiteProfile->ShortDescription){{$SiteProfile->ShortDescription}}@endisset</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Save Site Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.3-pre
        </div>
    </footer>
</div>
<script src=" {{ mix('js/app.js') }} "></script>
<script>
    $(document).ready(function() {


        $('#featuredimage1').click(function(){
            $('#previousimage').attr('src','/'+'{{$SiteProfile->logo->imageurl}}');
            $('#imagelocation').attr('value','{{$SiteProfile->logo->imageurl}}');
            $('#getimageId').attr('value','{{$SiteProfile->MainLogo}}');
            $('#getImageAltText').attr('value','{{$SiteProfile->MainLogoAltText}}');
            $('#getImageTitleText').attr('value','{{$SiteProfile->MainLogoTitleText}}');
        });


        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            var imageurl = $('#imagelocation').val();

            $('#previewImage').attr('src','/'+imageurl);
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

        $('#iconselect').click(function(){
            var imageid = $('#getimageId').val();
            var imageurl = $('#imagelocation').val();

            $('#previewImage2').attr('src','/'+imageurl);
            $('#setimageid2').attr('value',imageid);
        });

    });
</script>
@include('Admin.inc.footersource')
