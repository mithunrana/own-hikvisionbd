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
                            <form action="{{url('admin/authorised-store')}}" method="POST">
                                @csrf
                                <div class="row">
                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <label for="Name">Certificate Name :</label>
                                        <input style="border: 1px solid #586bde;" type="text" placeholder="Enter Certificate Name" class="form-control{{$errors->has('CertificateName') ? ' is-invalid' : ''}}" value="{{old('CertificateName')}}" name="CertificateName" id="CertificateName">
                                    </div>

                                    <div class="form-group">
                                        <label for="certificatedetails">Certificate Details:</label>
                                        <textarea style="border: 1px solid #586bde;" type="text" class="form-control" rows="7" placeholder="Enter Service Structured Data" name="certificatedetails" id="certificatedetails">{{old('certificatedetails')}}</textarea>
                                    </div>
                                </div>
                                    <div class="col-sm-4">
                                        <img style="width: 100%;" id="previewImage" src="{{asset('images')}}/default-image.png">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                        @if($errors->has('FeaturedImage1'))
                                            <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                {{$errors->first('FeaturedImage1')}}
                                            </div>
                                        @endif

                                        <img style="width: 100%;margin-top: 10px;" id="previewImage2" src="{{asset('images')}}/default-image.png">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                        @if($errors->has('FeaturedImage2'))
                                            <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                {{$errors->first('FeaturedImage2')}}
                                            </div>
                                        @endif
                                    </div>

                                    <input type="hidden" value="{{old('FeaturedImage1')}}" name="FeaturedImage1" id="setimageid"/>
                                    <input type="hidden" value="{{old('FeaturedImage2')}}" name="FeaturedImage2" id="setimageid2"/>
                                    <input type="hidden" value="{{old('ImageTitleText')}}" name="ImageTitleText" id="setImageTitleText"/>
                                    <input type="hidden" value="{{old('ImageAltText')}}"  name="ImageAltText" id="setImageAltText"/>
                                </div>
                                <button type="submit" class="btn btn-success">Add Certificate</button>
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
