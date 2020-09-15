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
        <section id="app" style="margin-top:10px;" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Software Add Here</div>
                        <div class="card-body">
                            <form action="{{url('admin/software-store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="SoftwareName">Software Name :
                                                @if($errors->has('SoftwareName'))
                                                    <small style="color:red;"> {{$errors->first('SoftwareName')}}</small>
                                                @endif
                                            </label>
                                            <input style="border: 1px solid #586bde;"  placeholder="Enter Software Name" type="text" name="SoftwareName" class="form-control{{$errors->has('SoftwareName') ? ' is-invalid' : ''}}" value="{{old('SoftwareName')}}" id="SoftwareName">
                                        </div>
                                        <div class="form-group">
                                            <label for="DownloadLink">Download Link:
                                                @if($errors->has('DownloadLink'))
                                                    <small style="color:red;"> {{$errors->first('DownloadLink')}}</small>
                                                @endif
                                            </label>
                                            <input style="border: 1px solid #586bde;"  type="text" placeholder="Enter Download Link" class="form-control{{$errors->has('DownloadLink') ? ' is-invalid' : ''}}" value="{{old('BlogName')}}" name="DownloadLink" id="DownloadLink">
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
@include('Admin.inc.footersource')
