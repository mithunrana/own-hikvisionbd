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
                        <div class="card-header">Site Social Links</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="{{url('admin/update-sociallinks',[$SocialLinks->id])}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="visualtext">Visual Text</label>
                                            <input type="text" class="form-control{{$errors->has('visualtext') ? ' is-invalid' : ''}}" value="{{$SocialLinks->visualtext}}" id="visualtext"  name="visualtext" placeholder="Enter Visual Text">
                                        </div>
                                        <div class="form-group">
                                            <label for="url">Link URL</label>
                                            <input type="text" class="form-control{{$errors->has('url') ? ' is-invalid' : ''}}" value="{{$SocialLinks->url}}" id="url" name="url" placeholder="Enter Links URL">
                                        </div>
                                        <div class="form-group">
                                            <label for="sitename">Social Site Name</label>
                                            <input type="text" class="form-control{{$errors->has('sitename') ? ' is-invalid' : ''}}" value="{{$SocialLinks->sitename}}" id="sitename" name="sitename" placeholder="Enter Social Site Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="icon">Font Awesome</label>
                                            <input type="text" class="form-control{{$errors->has('icon') ? ' is-invalid' : ''}}" value="{{$SocialLinks->icon}}" id="icon" name="icon" placeholder="Enter Font Awesome Icon">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Social Site Name</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\SocialLinks::all() as $Links)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Links->sitename}}</td>
                                                <td>{!! html_entity_decode($Links->icon) !!}</td>
                                                <td>
                                                    <a href="{{url('admin/view-sociallinks',[$Links->id])}}" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                                    <a href="{{url('admin/edit-sociallinks',[$Links->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/delete-sociallinks',[$Links->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
