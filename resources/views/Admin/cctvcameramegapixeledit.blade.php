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
                        <div class="card-header">Products Primary Category Edit</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                        <form action="{{url('admin/cctvmegapixel-update',[$MegaPixel->id])}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="MegaPixel">Mega Pixel</label>
                                                <input type="text" class="form-control{{$errors->has('MegaPixel') ? ' is-invalid' : ''}}" value="{{$MegaPixel->MegaPixel}}" id="MegaPixel"  name="MegaPixel" placeholder="Enter Category Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelUrl">Mega Pixel URL</label>
                                                <input type="text" class="form-control{{$errors->has('MegaPixelUrl') ? ' is-invalid' : ''}}" value="{{$MegaPixel->MegaPixelUrl}}" id="MegaPixelUrl" name="MegaPixelUrl" placeholder="Enter Category URL">
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelBrowserTitle">Browser Title</label>
                                                <input type="text" class="form-control{{$errors->has('MegaPixelBrowserTitle') ? ' is-invalid' : ''}}" value="{{$MegaPixel->MegaPixelBrowserTitle}}" id="MegaPixelBrowserTitle"  name="MegaPixelBrowserTitle" placeholder="Enter Category Browser Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelBrowserTitle">SEO Heading</label>
                                                <input type="text" class="form-control{{$errors->has('SeoHeading') ? ' is-invalid' : ''}}" value="{{$MegaPixel->SeoHeading}}" id="SeoHeading"  name="SeoHeading" placeholder="Enter SEO Heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelDetails">Mega Pixel Details</label>
                                                <textarea type="text" class="form-control{{$errors->has('MegaPixelDetails') ? ' is-invalid' : ''}}" id="MegaPixelDetails" name="MegaPixelDetails" placeholder="Enter Mega Pixel Details....">{{$MegaPixel->MegaPixelDetails}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelSeoKeyword">SEO Keyword</label>
                                                <textarea type="text" class="form-control{{$errors->has('MegaPixelSeoKeyword') ? ' is-invalid' : ''}}"  id="MegaPixelSeoKeyword" name="MegaPixelSeoKeyword" placeholder="Enter Mega Pixel SEO Keyword....">{{$MegaPixel->MegaPixelSeoKeyword}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="MegaPixelSeoDescription">SEO Description</label>
                                                <textarea type="text" class="form-control{{$errors->has('MegaPixelSeoDescription') ? ' is-invalid' : ''}}"  id="MegaPixelSeoDescription" name="MegaPixelSeoDescription" placeholder="Enter Mega Pixel  SEO Description....">{{$MegaPixel->MegaPixelSeoDescription}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mega Pixel</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\CctvCameraMegaPixel::all() as $Category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Category->MegaPixel}}</td>
                                                <td>
                                                    <a href="{{url('admin/cctvmegapixel-view',[$Category->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/cctvmegapixel-edit',[$Category->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/cctvmegapixel-delete',[$Category->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
<script src=" {{ mix('js/app.js') }} "></script>
<script>
    $(document).ready( function () {

        $('#mytable').DataTable();

        tinymce.init({
            selector: '#MegaPixelDetails',
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

