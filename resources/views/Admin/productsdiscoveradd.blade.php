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
        <section id="app" style="margin-top:10px;" class="content">

            <!-- Modal -->
            <products-image-component></products-image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Add Technology</div>
                        <div class="card-body">
                            <form action="{{url('admin/discoverproducts-store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            @if($errors->has('FeaturedImage'))
                                                <div  class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('FeaturedImage')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="PrimaryCategoryId">Primary Category</label>
                                            <select id="PrimaryCategoryId" class="form-control" name="PrimaryCategoryId">
                                                <option value="" selected disabled>=============Products Primary Category===========</option>
                                                @foreach(App\ProductsPrimaryCategory::all() as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="GridName">Discover Name:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('DiscoverName') ? ' is-invalid' : ''}}" value="{{old('DiscoverName')}}" placeholder="Enter Grid Name" name="DiscoverName" id="DiscoverName">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img style="max-width: 100%;" id="previewImage" src="{{asset('images')}}/default-image.png">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                    </div>
                                    <input type="hidden" value="{{old('FeaturedImage')}}" name="FeaturedImage" id="setimageid"/>
                                    <input type="hidden" value="{{old('ImageTitleText')}}" name="ImageTitleText" id="setImageTitleText"/>
                                    <input type="hidden" value="{{old('ImageAltText')}}"  name="ImageAltText" id="setImageAltText"/>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
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
<!-- ./wrapper -->
<script src=" {{ mix('js/app.js') }} "></script>
<script>
    $(document).ready(function() {
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
    });
</script>
@include('Admin.inc.footersource')
