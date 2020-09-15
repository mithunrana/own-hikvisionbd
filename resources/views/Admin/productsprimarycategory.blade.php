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
                        <div class="card-header">Product Primary Category</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="{{url('admin/products-primary-store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="CategoryName">Primary Category Name</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryName') ? ' is-invalid' : ''}}" value="{{old('CategoryName')}}" id="CategoryName"  name="CategoryName" placeholder="Enter Category Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="CategoryUrl">Category URL</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryUrl') ? ' is-invalid' : ''}}" value="{{old('CategoryUrl')}}" id="CategoryUrl" name="CategoryUrl" placeholder="Enter Category URL">
                                        </div>
                                        <div class="form-group">
                                            <label for="CategoryBrowserTitle">Browser Title</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryBrowserTitle') ? ' is-invalid' : ''}}" value="{{old('CategoryBrowserTitle')}}" id="CategoryBrowserTitle"  name="CategoryBrowserTitle" placeholder="Enter Category Browser Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoHeading">SEO Heading</label>
                                            <input type="text" class="form-control{{$errors->has('SeoHeading') ? ' is-invalid' : ''}}" value="{{old('SeoHeading')}}" id="SeoHeading"  name="SeoHeading" placeholder="Enter Seo Heading">
                                        </div>
                                        <div class="form-group">
                                            <label for="CategoryDetails">Category Details</label>
                                            <textarea type="text" rows="7" class="form-control{{$errors->has('CategoryDetails') ? ' is-invalid' : ''}}"  id="CategoryDetails" name="CategoryDetails" placeholder="Enter Category Details....">{{old('CategoryDetails')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategorySeoKeyword">SEO Keyword</label>
                                            <textarea type="text" class="form-control{{$errors->has('CategorySeoKeyword') ? ' is-invalid' : ''}}"  id="CategorySeoKeyword" name="CategorySeoKeyword" placeholder="Enter SEO Keyword....">{{old('CategorySeoKeyword')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategorySeoDescription">SEO Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('CategorySeoDescription') ? ' is-invalid' : ''}}"  id="CategorySeoDescription" name="CategorySeoDescription" placeholder="Enter SEO Description....">{{old('CategorySeoDescription')}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Primary Category Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\ProductsPrimaryCategory::all() as $Category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Category->CategoryName}}</td>
                                                <td>
                                                    <a href="{{url('admin/view-products-primary-category',[$Category->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/edit-products-primary-category',[$Category->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/delete-products-primary-category',[$Category->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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

        $('#mytable').DataTable();

        tinymce.init({
            selector: '#CategoryDetails',
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

    } );

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete? If you delete this category, this category related product are be deactive and this category related secondary category are delete");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
@include('Admin.inc.footersource')
