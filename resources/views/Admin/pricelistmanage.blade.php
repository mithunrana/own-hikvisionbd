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
                        <div class="card-header">Product Price List</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Price List Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\PriceList::all() as $PriceList)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{asset('').$PriceList->PriceListName}}</td>
                                                <td>
                                                    <a href="{{asset('').$PriceList->PriceListName}}" class="btn btn-info" download>Download</a>
                                                    <a href="{{url('admin/price-list-delete',[$PriceList->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-5">
                                    <form enctype="multipart/form-data" action="{{url('admin/price-list-store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="text" class="form-control{{$errors->has('PriceListName') ? ' is-invalid' : ''}}" value="{{old('PriceListName')}}" id="PriceListName" name="PriceListName" placeholder="Enter Price List Name">
                                            </div>
                                            <div class="form-group">
                                                @if($errors->has('file'))
                                                    <small style="color:red;"> {{$errors->first('file')}}</small>
                                                @endif
                                                <input type="file" class="form-control{{$errors->has('file') ? ' is-invalid' : ''}}" value="{{old('file')}}" id="file" placeholder="please select price list" name="file">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Price List</button>
                                    </form>
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
    function ConfirmDelete()
    {
        var x = confirm("Are You Sure Want To Delete This Price List");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
@include('Admin.inc.footersource')
