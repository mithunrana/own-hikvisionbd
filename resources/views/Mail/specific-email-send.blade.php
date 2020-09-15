@include('userdataedit.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('userdataedit.inc.adminHeader')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('userdataedit.inc.adminSideBar')
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section id="app" style="margin-top:10px;" class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-danger">SPECIFIC MAIL SENDING</div>
                        <div class="card-body">
                            <form action="{{url('admin/blog-store')}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="to">To:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Sending Mail Address" name="to" id="to"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Subject">Subject:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('Subject') ? ' is-invalid' : ''}}" value="{{old('Subject')}}" placeholder="Enter Mail Subject Name" name="Subject" id="Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sendermailname">Replay E-mail</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="sendermailname" placeholder="Sender Mail Name" class="form-control{{$errors->has('sendermailname') ? ' is-invalid' : ''}}" value="{{old('sendermailname')}}" id="sendermailname">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="mailtemplate">Mail Template:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('mailtemplate') ? ' is-invalid' : ''}}"  rows="7" placeholder="Enter Mail Template Here" name="mailtemplate" id="mailtemplate">{{old('mailtemplate')}}</textarea>
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

        tinymce.init({
            selector: '#BlogDetails',
            theme: "modern",
            height: 200,
            width: '100%',
            relative_urls:false,
            remove_script_host: false,
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
@include('userdataedit.inc.footersource')
