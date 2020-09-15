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
                        <div class="card-header">Blog Category</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="#" method="">
                                        @csrf
                                        <div class="form-group">
                                            <label for="CategoryName">Category Name</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryName') ? ' is-invalid' : ''}}" value="{{$Category->CategoryName}}" id="CategoryName"  name="CategoryName" placeholder="Enter Category Name" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategoryUrl">Category URL</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryUrl') ? ' is-invalid' : ''}}" value="{{$Category->CategoryUrl}}" id="CategoryUrl" name="CategoryUrl" placeholder="Enter Category URL" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategoryBrowserTitle">Browser Title</label>
                                            <input type="text" class="form-control{{$errors->has('CategoryBrowserTitle') ? ' is-invalid' : ''}}" value="{{$Category->CategoryBrowserTitle}}" id="CategoryBrowserTitle"  name="CategoryBrowserTitle" placeholder="Enter Category Browser Title" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategorySeoKeyword">SEO Keyword</label>
                                            <textarea type="text" class="form-control{{$errors->has('CategorySeoKeyword') ? ' is-invalid' : ''}}"  id="CategorySeoKeyword" name="CategorySeoKeyword" placeholder="Enter SEO Keyword...." readonly>{{$Category->CategorySeoKeyword}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="CategorySeoDescription">SEO Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('CategorySeoDescription') ? ' is-invalid' : ''}}"  id="CategorySeoDescription" name="CategorySeoDescription" placeholder="Enter SEO Description...." readonly>{{$Category->CategorySeoDescription}}</textarea>
                                        </div>
                                        <a href="{{url('admin/blog-category')}}" class="btn btn-primary">BACK</a>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Categories as $Category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Category->CategoryName}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/edit-blog-category',[$Category->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/blog-delete',[$Category->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i  style="font-size:17px;" class="fa fa-close"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </a>
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
