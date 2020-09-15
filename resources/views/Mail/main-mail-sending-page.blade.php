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
        <!-- Main content -->
        <section id="app" style="margin-top: 10px" class="content">
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table id="mytable" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Check</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                @foreach(App\User::all() as $User)
                                    <tbody>
                                    <form>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><input type="checkbox" name="lastname"></td>
                                        <td>{{$User->name}}</td>
                                        <td>{{$User->email }}</td>
                                        <td>{{$User->companyname}}</td>
                                        <td>
                                            <a href="{{asset('')}}news/}}" target="_blank" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i> Send Mail</a>
                                        </td>
                                    </tr>
                                    </form>
                                    </tbody>
                                @endforeach
                            </table>
                            <a href="#" class="btn btn-danger pull-right">SELECTED MAIL SEND</a>
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
@include('userdataedit.inc.footersource')
