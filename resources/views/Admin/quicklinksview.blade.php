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
                                    <form action="{{url('admin/quicklinks')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Quick Links Name</label>
                                            <input type="text" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{$QuickLink->name}}" id="name"  name="name" placeholder="Enter Quick Links Name" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="url">Link URL</label>
                                            <input type="text" class="form-control{{$errors->has('url') ? ' is-invalid' : ''}}" value="{{$QuickLink->url}}" id="url" name="url" placeholder="Enter Links URL" readonly>
                                        </div>
                                        <a href="{{url('admin/quicklinks')}}" class="btn btn-primary">Back</a>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Link Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\QuickLiinks::all() as $Links)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Links->name}}</td>
                                                <td>
                                                    <a href="{{url('admin/view-quicklinks',[$Links->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/edit-quicklinks',[$Links->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/delete-quicklinks',[$Links->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
