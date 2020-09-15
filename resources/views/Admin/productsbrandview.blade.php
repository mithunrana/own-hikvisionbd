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
                        <div class="card-header">Products Brand View</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="#" method="">
                                        @csrf
                                        <div class="form-group">
                                            <label for="BrandName">Brand Name</label>
                                            <input type="text" class="form-control{{$errors->has('BrandName') ? ' is-invalid' : ''}}" value="{{$Brand->BrandName}}" id="BrandName"  name="BrandName" placeholder="Enter Category Name" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandUrl">Category URL</label>
                                            <input type="text" class="form-control{{$errors->has('BrandUrl') ? ' is-invalid' : ''}}" value="{{$Brand->BrandUrl}}" id="BrandUrl" name="BrandUrl" placeholder="Enter Category URL" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandBrowserTitle">Browser Title</label>
                                            <input type="text" class="form-control{{$errors->has('BrandBrowserTitle') ? ' is-invalid' : ''}}" value="{{$Brand->BrandBrowserTitle}}" id="BrandBrowserTitle"  name="BrandBrowserTitle" placeholder="Enter Category Browser Title" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="SeoHeading">Seo Heading</label>
                                            <input type="text" class="form-control{{$errors->has('SeoHeading') ? ' is-invalid' : ''}}" value="{{$Brand->SeoHeading}}" id="SeoHeading"  name="SeoHeading" placeholder="Enter Category Browser Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandDetails">Brand Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandDetails') ? ' is-invalid' : ''}}" value="" id="BrandDetails" name="BrandDetails" placeholder="Enter SEO Keyword....">{{$Brand->BrandDetails}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandSeoKeyword">SEO Keyword</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandSeoKeyword') ? ' is-invalid' : ''}}"  id="BrandSeoKeyword" name="BrandSeoKeyword" placeholder="Enter SEO Keyword...." readonly>{{$Brand->BrandSeoKeyword}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="BrandSeoDescription">SEO Description</label>
                                            <textarea type="text" class="form-control{{$errors->has('BrandSeoDescription') ? ' is-invalid' : ''}}"  id="BrandSeoDescription" name="BrandSeoDescription" placeholder="Enter SEO Description...." readonly>{{$Brand->BrandSeoDescription}}</textarea>
                                        </div>
                                        <a href="{{url('admin/products-brand')}}" class="btn btn-primary">BACK</a>
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
                                        @foreach(App\ProductsBrand::orderBy('id', 'DESC')->get() as $Brand)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Brand->BrandName}}</td>
                                                <td>
                                                    <a href="{{url('admin/products-brand-view',[$Brand->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/products-brand-edit',[$Brand->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/products-brand-delete',[$Brand->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
