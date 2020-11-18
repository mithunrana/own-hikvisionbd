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
        <section style="margin-top: 10px;" id="app" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Training Edit Here</div>
                        <div class="card-body">
                            <form action="{{url('admin/training-update',[$Training->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="form-group">
                                            @if($errors->has('FeaturedImage1'))
                                                <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('FeaturedImage1')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @if($errors->has('FeaturedImage2'))
                                                <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('FeaturedImage2')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="BrowserTitle">Browser Title :</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('BrowserTitle') ? ' is-invalid' : ''}}" value="{{$Training->BrowserTitle}}" name="BrowserTitle" id="BrowserTitle">
                                        </div>

                                        <div class="form-group">
                                            <label for="Permalink">Permalink :</label>
                                            <input style="border: 1px solid #586bde;" oninput="this.value=this.value.toLowerCase()" type="text" class="form-control{{$errors->has('Permalink') ? ' is-invalid' : ''}}" value="{{$Training->Permalink}}" name="Permalink" id="Permalink">
                                        </div>

                                        <div class="form-group">
                                            <label for="TrainingName">Training Name:</label>
                                            <input style="border: 1px solid #586bde;"  type="text" class="form-control{{$errors->has('TrainingName') ? ' is-invalid' : ''}}" value="{{$Training->TrainingName}}" name="TrainingName" id="TrainingName">
                                        </div>

                                        <div class="form-group">
                                            <label for="TrainingDate">Training Date:</label>
                                            <input style="border: 1px solid #586bde;"  type="date" class="form-control{{$errors->has('TrainingDate') ? ' is-invalid' : ''}}" value="{{$Training->TrainingDate}}" name="TrainingDate" id="TrainingDate">
                                        </div>

                                        <div class="form-group">
                                            <label for="TrainingTime">Training Time:</label>
                                            <input style="border: 1px solid #586bde;"  type="time" class="form-control{{$errors->has('TrainingTime') ? ' is-invalid' : ''}}" value="{{$Training->TrainingTime}}" name="TrainingTime" id="TrainingTime">
                                        </div>

                                        <div class="form-group">
                                            <label for="SeoKeyword">SEO Keyword:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('SeoKeyword') ? ' is-invalid' : ''}}" name="SeoKeyword" id="SeoKeyword">{{$Training->SeoKeyword}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoDescription">SEO Description:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('SeoDescription') ? ' is-invalid' : ''}}"  name="SeoDescription" id="SeoDescription">{{$Training->SeoDescription}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <img style="width: 100%;" id="previewImage" src="/{{$Training->featuredimage1->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage1" data-target="#imagemodal" class="btn btn-success">Select Image One </div>

                                        <img style="width: 100%;margin-top: 10px;" id="previewImage2" src="/{{$Training->featuredimage2->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage2" data-target="#imagemodal" class="btn btn-success">Select Image Two</div>
                                    </div>

                                    <input type="hidden" value="{{$Training->FeaturedImage1}}" name="FeaturedImage1" id="setimageid"/>
                                    <input type="hidden" value="{{$Training->FeaturedImage2}}" name="FeaturedImage2" id="setimageid2"/>
                                    <input type="hidden" value="{{$Training->ImageTitleText}}" name="ImageTitleText" id="setImageTitleText"/>
                                    <input type="hidden" value="{{$Training->ImageAltText}}"  name="ImageAltText" id="setImageAltText"/>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="TrainingShortText">Training Featured Details:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" rows="7" placeholder="Enter Service Structured Data" name="TrainingShortText" id="TrainingShortText">{{$Training->TrainingShortText}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="TrainingDetails">Training Details:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" rows="7" placeholder="Enter Events Details" name="TrainingDetails" id="TrainingDetails">{{$Training->TrainingDetails}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
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
            $('#previousimage').attr('src','/'+'{{$Training->featuredimage1->imageurl}}');
            $('#imagelocation').attr('value','{{$Training->featuredimage1->imageurl}}');
            $('#getimageId').attr('value','{{$Training->FeaturedImage1}}');
            $('#getImageAltText').attr('value','{{$Training->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Training->ImageTitleText}}');
        });

        $('#featuredimage2').click(function(){
            $('#previousimage').attr('src','/'+'{{$Training->featuredimage2->imageurl}}');
            $('#imagelocation').attr('value','{{$Training->featuredimage2->imageurl}}');
            $('#getimageId').attr('value','{{$Training->FeaturedImage2}}');
            $('#getImageAltText').attr('value','{{$Training->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Training->ImageTitleText}}');
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

        tinymce.init({
            selector: '#FeaturedDetails',
            theme: "modern",
            height: 200,
            width: '100%',
            relative_urls:false,
            remove_script_host: true,
            valid_children : "+body[style],-body[div],p[strong|a|#text]",
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor code"
            ],

            toolba1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolba2: "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

            image_caption: true,
            image_advtab: true
        });


        tinymce.init({
            selector: '#EventsDetails',
            theme: "modern",
            height: 200,
            width: '100%',
            relative_urls:false,
            remove_script_host: true,
            valid_children : "+body[style],-body[div],p[strong|a|#text]",
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor code"
            ],

            toolba1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolba2: "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

            image_caption: true,
            image_advtab: true
        });

    });
</script>
@include('Admin.inc.footersource')
