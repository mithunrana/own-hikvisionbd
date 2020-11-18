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
        <section id="app" style="margin-top: 10px;" class="content">
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Products Brand Edit</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="{{url('admin/products-brand-update',[$Brand->id])}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="BrandName">Brand Name</label>
                                            <input type="text" class="form-control{{$errors->has('BrandName') ? ' is-invalid' : ''}}" value="{{$Brand->BrandName}}" id="BrandName"  name="BrandName" placeholder="Enter Brand Name">
                                        </div>
                                        <div class="form-group">
                                            @if($errors->has('BrandUrl'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('BrandUrl')}}
                                                </div>
                                            @endif
                                            <label for="BrandUrl">Category URL</label>
                                            <input type="text" class="form-control{{$errors->has('BrandUrl') ? ' is-invalid' : ''}}" value="{{$Brand->BrandUrl}}" id="BrandUrl" name="BrandUrl" placeholder="Enter Brand URL">
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandBrowserTitle">Browser Title</label>
                                            <input type="text" class="form-control{{$errors->has('BrandBrowserTitle') ? ' is-invalid' : ''}}" value="{{$Brand->BrandBrowserTitle}}" id="BrandBrowserTitle"  name="BrandBrowserTitle" placeholder="Enter Brand Browser Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoHeading">Seo Heading</label>
                                            <input type="text" class="form-control{{$errors->has('SeoHeading') ? ' is-invalid' : ''}}" value="{{$Brand->SeoHeading}}" id="SeoHeading"  name="SeoHeading" placeholder="Enter Brand Heading">
                                        </div>

                                        <div class="form-group">
                                            <img id="previewImage" style="width: 100%;margin-top: 27px;" src="/{{$Brand->image->imageurl}}">
                                            <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage" data-target="#imagemodal" class="btn btn-success">Select Brand Image</div>
                                        </div>

                                        <!-- Modal -->
                                        <products-image-component></products-image-component>
                                        <!-- Modal -->

                                        <input type="hidden" name="FeaturedImage" id="setimageid" value="{{$Brand->FeaturedImage}}">
                                        <input type="hidden" name="ImageAltText" id="setImageAltText"  value="{{$Brand->ImageAltText}}">
                                        <input type="hidden" name="ImageTitleText" id="setImageTitleText" value="{{$Brand->ImageTitleText}}">


                                        <div class="form-group">
                                            <label for="BrandDetails">Brand Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandDetails') ? ' is-invalid' : ''}}" value="" id="BrandDetails" name="BrandDetails" placeholder="Enter Brand Details....">{{$Brand->BrandDetails}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandSeoKeyword">SEO Keyword</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandSeoKeyword') ? ' is-invalid' : ''}}"  id="BrandSeoKeyword" name="BrandSeoKeyword" placeholder="Enter SEO Keyword....">{{$Brand->BrandSeoKeyword}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandSeoDescription">SEO Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandSeoDescription') ? ' is-invalid' : ''}}"  id="BrandSeoDescription" name="BrandSeoDescription" placeholder="Enter SEO Description....">{{$Brand->BrandSeoDescription}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">UPDATE</button>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\ProductsBrand::orderBy('id', 'DESC')->get() as $EachBrand)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$EachBrand->BrandName}}</td>
                                                <td>
                                                    <a href="{{url('admin/products-brand-view',[$EachBrand->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/products-brand-edit',[$EachBrand->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/products-brand-delete',[$EachBrand->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    $(document).ready( function () {

        $('#featuredimage').click(function(){
            $('#previousimage').attr('src','/'+'{{$Brand->image->imageurl}}');
            $('#imagelocation').attr('value','{{$Brand->image->imageurl}}');
            $('#getimageId').attr('value','{{$Brand->FeaturedImage}}');
            $('#getImageAltText').attr('value','{{$Brand->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$Brand->ImageTitleText}}');
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


        $('#mytable').DataTable();

        tinymce.init({
            selector: '#BrandDetails',
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
    } );

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
@include('Admin.inc.footersource')
