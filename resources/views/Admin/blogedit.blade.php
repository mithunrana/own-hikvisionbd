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
                        <div class="card-header">Blog Add Here</div>
                        <div class="card-body">
                            <form action="{{url('admin/blog-update',[$BlogTutorial->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="form-group">
                                            @if($errors->has('VideoURL'))
                                                <div  class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('VideoURL')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @if($errors->has('FeaturedImage'))
                                                <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('FeaturedImage')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            @if($errors->has('Category'))
                                                <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('Category')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Blog Category</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="Category">
                                                <option value="" selected disabled>=============Select Blog Category===========</option>
                                                @foreach(App\BlogCategory::all() as $cat)
                                                    <option value="{{$cat->id}}" {{$cat->id == $BlogTutorial->Category ? 'selected="selected"' : ''}}>{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrowserTitle">Browser Title :</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="BrowserTitle" placeholder="Enter Browser Title" class="form-control{{$errors->has('BrowserTitle') ? ' is-invalid' : ''}}" value="{{$BlogTutorial->BrowserTitle}}" id="BrowserTitle">
                                        </div>
                                        <div class="form-group">
                                            @if($errors->has('Permalink'))
                                                <div  class="error" style="color: red;">
                                                    {{$errors->first('Permalink')}}
                                                </div>
                                            @endif
                                            <label for="Permalink">Permalink :</label>
                                            <input style="border: 1px solid #586bde;" oninput="this.value=this.value.toLowerCase()" placeholder="Enter permalink" type="text" name="Permalink" class="form-control{{$errors->has('Permalink') ? ' is-invalid' : ''}}" value="{{$BlogTutorial->Permalink}}" id="Permalink">
                                        </div>
                                        <div class="form-group">
                                            <label for="BlogName">Blog Name:</label>
                                            <input style="border: 1px solid #586bde;"  type="text" placeholder="Enter Blog Name" class="form-control{{$errors->has('BlogName') ? ' is-invalid' : ''}}" value="{{$BlogTutorial->BlogName}}" name="BlogName" id="BlogName">
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoKeyword">SEO Keyword:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Service Related Keyword" name="SeoKeyword" id="SeoKeyword">{{$BlogTutorial->SeoKeyword}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoDescription">SEO Description:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter SEO Description" name="SeoDescription" id="SeoDescription">{{$BlogTutorial->SeoDescription}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <img id="previewImage" style="width: 100%;margin-top: 27px;" src="/{{$BlogTutorial->featuredimage->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                    </div>
                                    <input type="hidden" name="FeaturedImage" id="setimageid" value="{{$BlogTutorial->FeaturedImage}}">
                                    <input type="hidden" name="ImageAltText" id="setImageAltText"  value="{{$BlogTutorial->ImageAltText}}">
                                    <input type="hidden" name="ImageTitleText" id="setImageTitleText" value="{{$BlogTutorial->ImageTitleText}}">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="VideoURL">Video URL:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('VideoURL') ? ' is-invalid' : ''}}" value="{{$BlogTutorial->VideoURL}}" placeholder="Enter Video URL" name="VideoURL" id="VideoURL">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="EmbeddedVideo">Embedded Video:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('EmbeddedVideo') ? ' is-invalid' : ''}}" value="{{$BlogTutorial->EmbeddedVideo}}" placeholder="Enter Embedded Video" name="EmbeddedVideo" id="EmbeddedVideo">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="StructuredData">Structured Data :</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Service Structured Data" name="StructuredData" id="StructuredData">{{$BlogTutorial->StructuredData}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="BlogDetails">Blog Details:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('BlogDetails') ? ' is-invalid' : ''}}"  rows="7" placeholder="Enter Service Structured Data" name="BlogDetails" id="BlogDetails">{{$BlogTutorial->BlogDetails}}</textarea>
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

        $('#featuredimage').click(function(){
            $('#previousimage').attr('src','/'+'{{$BlogTutorial->featuredimage->imageurl}}');
            $('#imagelocation').attr('value','{{$BlogTutorial->featuredimage->imageurl}}');
            $('#getimageId').attr('value','{{$BlogTutorial->FeaturedImage}}');
            $('#getImageAltText').attr('value','{{$BlogTutorial->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$BlogTutorial->ImageTitleText}}');
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
@include('Admin.inc.footersource')
