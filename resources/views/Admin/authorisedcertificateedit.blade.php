@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('Admin.inc.adminHeader')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.inc.adminSideBar')
<!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section id="app" style="margin-top:10px;" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Blog Add Here</div>
                        <div class="card-body">
                            <form action="{{url('admin/authorised-update',[$Certificate->id])}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="form-group">
                                            <label for="CertificateName">Name :</label>
                                            <input style="border: 1px solid #586bde;" type="text" placeholder="Enter Certificate Name" class="form-control{{$errors->has('CertificateName') ? ' is-invalid' : ''}}" value="{{$Certificate->CertificateName}}" name="CertificateName" id="CertificateName">
                                        </div>

                                        <div class="form-group">
                                            <label for="certificatedetails">Certificate Details:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" rows="7" placeholder="Enter Service Structured Data" name="certificatedetails" id="certificatedetails">{{$Certificate->certificatedetails}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <img style="width: 100%;" id="previewImage" src="/{{$Certificate->featuredimage1->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage1" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                        @if($errors->has('FeaturedImage1'))
                                            <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                {{$errors->first('FeaturedImage1')}}
                                            </div>
                                        @endif

                                        <img style="width: 100%;margin-top: 10px;" id="previewImage2" src="/{{$Certificate->featuredimage2->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage2" data-target="#imagemodal" class="btn btn-success">Select Image Two</div>
                                        @if($errors->has('FeaturedImage2'))
                                            <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                {{$errors->first('FeaturedImage2')}}
                                            </div>
                                        @endif
                                    </div>

                                    <input type="hidden" value="{{$Certificate->FeaturedImage1}}" name="FeaturedImage1" id="setimageid"/>
                                    <input type="hidden" value="{{$Certificate->FeaturedImage2}}" name="FeaturedImage2" id="setimageid2"/>
                                    <input type="hidden" value="{{$Certificate->ImageTitleText}}" name="ImageTitleText" id="setImageTitleText"/>
                                    <input type="hidden" value="{{$Certificate->ImageAltText}}"  name="ImageAltText" id="setImageAltText"/>

                                </div>
                                <button type="submit" class="btn btn-success">Update Certificate</button>
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
<!-- ./wrapper -->
<script src=" {{ mix('js/app.js') }} "></script>
<script>
    $(document).ready(function() {
        $('#featuredimage1').click(function(){
            $('#previousimage').attr('src','/'+'{{$Certificate->featuredimage1->imageurl}}');
            $('#imagelocation').attr('value','{{$Certificate->featuredimage1->imageurl}}');
            $('#getimageId').attr('value','{{$Certificate->FeaturedImage1}}');
            $('#getImageAltText').attr('value','{{$Certificate->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Certificate->ImageTitleText}}');
        });

        $('#featuredimage2').click(function(){
            $('#previousimage').attr('src','/'+'{{$Certificate->featuredimage2->imageurl}}');
            $('#imagelocation').attr('value','{{$Certificate->featuredimage2->imageurl}}');
            $('#getimageId').attr('value','{{$Certificate->FeaturedImage2}}');
            $('#getImageAltText').attr('value','{{$Certificate->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Certificate->ImageTitleText}}');
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
