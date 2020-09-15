@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('Admin.inc.adminHeader')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.inc.adminSideBar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section id="app" style="margin-top: 10px;" class="content">

            <!-- Modal -->
            <products-image-component></products-image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">News Add Here</div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{url('admin/products-update',[$Products->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">
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
                                            <label for="BrandId">Brand</label>
                                            <select class="form-control" id="BrandId" name="BrandId">
                                                <option value="" selected disabled>=============Select Products Brand===========</option>
                                                @foreach(App\ProductsBrand::all() as $Brand)
                                                    <option value="{{$Brand->id}}" {{$Brand->id == $Products->BrandId ? 'selected="selected"' : ''}}>{{$Brand->BrandName}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="Category">Primary Category</label>
                                            <select id="primarycategory" class="form-control" id="Category" name="Category">
                                                <option value="" selected disabled>=============Products Primary Category===========</option>
                                                @foreach(App\ProductsPrimaryCategory::all() as $cat)
                                                    <option value="{{$cat->id}}" @if($Products->Category !== 0) {{$cat->id == $Products->secondaryCategory->primaryCategory->id ? 'selected="selected"' : ''}}@endif>{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="Category">Secondary Category</label>
                                            <select id="secondarycategory" class="form-control" id="Category" name="Category">
                                                <option value="" selected disabled>=============Products Secondary Category===========</option>
                                                @foreach(App\ProductsSecondaryCategory::all() as $cat)
                                                    <option value="{{$cat->id}}" {{$cat->id == $Products->Category ? 'selected="selected"' : ''}}>{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="ProductsType">Products Type</label>
                                            <select id="ProductsType" class="form-control" name="ProductsType">
                                                <option value="" selected disabled>=============Products Type===========</option>
                                                @foreach(App\ProductType::all() as $type)
                                                    <option value="{{$type->id}}" {{$type->id == $Products->ProductsType ? 'selected="selected"' : ''}}>{{$type->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="MegaPixelId">Mega Pixel</label>
                                            <select id="MegaPixelId" class="form-control" id="MegaPixelId" name="MegaPixelId">
                                                <option value="" selected disabled>=============SELECT MEGA PIXEL===========</option>
                                                @foreach(App\CctvCameraMegaPixel::all() as $MegaPixel)
                                                    <option value="{{$MegaPixel->id}}" {{$MegaPixel->id == $Products->MegaPixelId ? 'selected="selected"' : ''}}>{{$MegaPixel->MegaPixel}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            @if($errors->has('Model'))
                                                <div class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('Model')}}
                                                </div>
                                            @endif
                                            <label for="BrowserTitle">Model:</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="Model" placeholder="Enter Products Model" class="form-control{{$errors->has('Model') ? ' is-invalid' : ''}}" value="{{$Products->Model}}" id="Model">
                                        </div>

                                        <div class="form-group">
                                            <label for="Name">Products Name:</label>
                                            <input style="border: 1px solid #586bde;"  type="text" placeholder="Enter Blog Name" class="form-control{{$errors->has('Name') ? ' is-invalid' : ''}}" value="{{$Products->Name}}" name="Name" id="Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="SeoHeading">Seo Heading:</label>
                                            <input style="border: 1px solid #586bde;"  type="text" placeholder="Enter Blog Name" class="form-control{{$errors->has('SeoHeading') ? ' is-invalid' : ''}}" value="{{$Products->SeoHeading}}" name="SeoHeading" id="SeoHeading">
                                        </div>

                                        <div class="form-group">
                                            <label for="BrowserTitle">Browser Title :</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="BrowserTitle" placeholder="Enter Browser Title" class="form-control{{$errors->has('BrowserTitle') ? ' is-invalid' : ''}}" value="{{$Products->BrowserTitle}}" id="BrowserTitle">
                                        </div>

                                        <div class="form-group">
                                            <label for="Permalink">Permalink :</label>
                                            <input style="border: 1px solid #586bde;" oninput="this.value=this.value.toLowerCase()" placeholder="Enter permalink" type="text" name="Permalink" class="form-control{{$errors->has('Permalink') ? ' is-invalid' : ''}}" value="{{$Products->Permalink}}" id="Permalink">
                                        </div>


                                        <div class="form-group">
                                            <label for="SeoKeyword">SEO Keyword:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter SEO Description" name="SeoKeyword" id="SeoKeyword">{{$Products->SeoKeyword}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="SeoDescription">SEO Description:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter SEO Description" name="SeoDescription" id="SeoDescription">{{$Products->SeoDescription}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <img id="previewImage" style="width: 100%;margin-top: 27px;" src="/{{$Products->image->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage" data-target="#imagemodal" class="btn btn-success">Select Image One</div>

                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="Datasheet">Datasheet :</label>
                                            <input style="border: 1px solid #586bde;" type="file" name="Datasheet" class="form-control{{$errors->has('Datasheet') ? ' is-invalid' : ''}}" value="" id="Datasheet">
                                        </div>
                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="RegularPrice">Regular Price :</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="RegularPrice" placeholder="Enter Regular Price" class="form-control{{$errors->has('RegularPrice') ? ' is-invalid' : ''}}" value="{{$Products->RegularPrice}}" id="RegularPrice">
                                        </div>
                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="CurrentPrice">Current Price :</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="CurrentPrice" placeholder="Enter Current Price" class="form-control{{$errors->has('CurrentPrice') ? ' is-invalid' : ''}}" value="{{$Products->CurrentPrice}}" id="CurrentPrice">
                                        </div>
                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="CurrentPrice">Partner Price :</label>
                                            <input style="border: 1px solid #586bde;" type="text" name="PartnerPrice" placeholder="Enter Current Price" class="form-control{{$errors->has('PartnerPrice') ? ' is-invalid' : ''}}" value="{{$Products->PartnerPrice}}" id="PartnerPrice">
                                        </div>
                                    </div>

                                    <input type="hidden" name="FeaturedImage" id="setimageid" value="{{$Products->FeaturedImage}}">
                                    <input type="hidden" name="ImageAltText" id="setImageAltText"  value="{{$Products->ImageAltText}}">
                                    <input type="hidden" name="ImageTitleText" id="setImageTitleText" value="{{$Products->ImageTitleText}}">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="StructuredData">Structured Data :</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control" placeholder="Enter Structured Data" name="StructuredData" id="StructuredData">{{$Products->StructuredData}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ProductShortDescription">Short Description:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('ProductShortDescription') ? ' is-invalid' : ''}}"  rows="7" placeholder="Enter Product Short Description" name="ProductShortDescription" id="ProductShortDescription">{{$Products->ProductShortDescription}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Specification">Product Specification:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('Specification') ? ' is-invalid' : ''}}"  rows="7" placeholder="Enter Specification" name="Specification" id="Specification">{{$Products->Specification}}</textarea>
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
            $('#previousimage').attr('src','/'+'{{$Products->image->imageurl}}');
            $('#imagelocation').attr('value','{{$Products->image->imageurl}}');
            $('#getimageId').attr('value','{{$Products->FeaturedImage}}');
            $('#getImageAltText').attr('value','{{$Products->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Products->ImageTitleText}}');
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


        $('#primarycategory').change(function(){
            var CategoryId = $(this).val();
            $.ajax({
                url:"{{ url('admin/products-primary-catby-secondary-cat') }}",
                method:'GET',
                data:{CategoryId:CategoryId},
                dataType:'json',
                success:function(data)
                {
                    $('#secondarycategory').empty();
                    $('#secondarycategory').html(data.totalcategory);
                }
            })
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
            selector: '#ProductShortDescription',
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

        tinymce.init({
            selector: '#Specification',
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
