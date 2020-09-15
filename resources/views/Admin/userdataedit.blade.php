@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('Admin.inc.adminHeader')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.inc.adminSideBar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section id="app" style="margin-top: 10px;" class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">USER DATA ADD HERE</div>
                        <div class="card-body">
                            <form action="{{url('admin/userdata-update',[$UserData->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    @if(Session::has('message'))
                                        <div style="background-color: #ce0909;color:white;font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{Session::get('message')}}
                                        </div>
                                    @endif
                                    <div class="form-group col-lg-4">
                                        <label style="margin-bottom: 0px;" for="name">Name</label>
                                        @if($errors->has('name'))<small style="color:red;font-weight: bold;">{{$errors->first('name')}}</small>@endif
                                        <input type="text" class="form-control"  id="name" value="{{$UserData->name}}" placeholder="Enter Name Here"  name="name">
                                    </div>
                                    <div class="form-group col-6  col-lg-4">
                                        <label style="margin-bottom: 0px;" for="phone">Email</label>
                                        @if($errors->has('email'))<small style="color:red;font-weight: bold;">{{$errors->first('email')}}</small>@endif
                                        <input type="text" class="form-control"  value="{{$UserData->email}}" placeholder="Enter Email Here" id="email" name="email" >
                                    </div>
                                    <div class="form-group col-6  col-lg-4">
                                        <label style="margin-bottom: 0px;" for="phone">Phone</label>
                                        @if($errors->has('phone'))<small style="color:red;font-weight: bold;">{{$errors->first('phone')}}</small>@endif
                                        <input type="text" class="form-control" value="{{$UserData->phone}}" placeholder="Enter Phone Here" id="phone" name="phone" >
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-6 col-lg-6">
                                        <label style="margin-bottom: 0px;" for="customertype">Customer Type</label>
                                        @if($errors->has('customertype'))<small style="color:red;font-weight: bold;">{{$errors->first('customertype')}}</small>@endif
                                        <select id="customertype" class="form-control" name="customertype">
                                            <option selected disabled>SELECT CUSTOMER TYPE</option>/
                                            <option value="End User" {{$UserData->customertype == 'End User' ? 'selected="selected"' : ''}}>End User</option>/
                                            <option value="Retailer" {{$UserData->customertype == 'Retailer' ? 'selected="selected"' : ''}}>Retailer</option>/
                                            <option value="Corporate" {{$UserData->customertype == 'Corporate' ? 'selected="selected"' : ''}}>Corporate</option>/
                                        </select>
                                    </div>
                                    <div class="form-group col-6 col-lg-6 ifcompany">
                                        <label style="margin-bottom: 0px;" for="companyname">Company Name</label>
                                        @if($errors->has('companyname'))<small style="color:red;font-weight: bold;">{{$errors->first('companyname')}}</small>@endif
                                        <input type="text" class="form-control" value="{{$UserData->companyname}}" placeholder="Company Name" id="companyname" name="companyname" >
                                    </div>
                                    <div class="form-group col-6 col-lg-6 ifcompany">
                                        <label style="margin-bottom: 0px;" for="servicetype">SERVICE TYPE</label>
                                        @if($errors->has('servicetype'))<small style="color:red;font-weight: bold;">{{$errors->first('servicetype')}}</small>@endif
                                        <select id="servicetype" class="form-control" name="servicetype">
                                            <option selected disabled>SELECT SERVICE TYPE</option>/
                                            <option value="itservice" {{$UserData->servicetype == 'itservice' ? 'selected="selected"' : ''}}>IT Service</option>/
                                            <option value="softwareservice" {{$UserData->servicetype == 'softwareservice' ? 'selected="selected"' : ''}}>Software Service</option>/
                                            <option value="consultancyservice" {{$UserData->servicetype == 'consultancyservice' ? 'selected="selected"' : ''}}>Consultancy Service</option>/
                                        </select>
                                    </div>
                                    <div class="form-group col-6 col-lg-6">
                                        <label style="margin-bottom: 0px;" for="country">Country</label>
                                        @if($errors->has('country'))<small style="color:red;font-weight: bold;">{{$errors->first('country')}}</small>@endif
                                        <input type="text" class="form-control" value="{{$UserData->country}}" placeholder="Enter Client Country Name" id="country" name="country" >
                                    </div>
                                    <div class="form-group col-6 col-lg-6">
                                        <label style="margin-bottom: 0px;" for="activestatus">Active Status</label>
                                        @if($errors->has('activestatus'))<small style="color:red;font-weight: bold;">{{$errors->first('activestatus')}}</small>@endif
                                        <select id="activestatus" class="form-control" name="activestatus">
                                            <option selected disabled>SELECT CUSTOMER TYPE</option>/
                                            <option value="TechRegister" {{$UserData->activestatus == 'TechRegister' ? 'selected="selected"' : ''}} >Tech Register</option>/
                                            <option value="EndUserNotActive	" {{$UserData->activestatus == '	EndUserNotActive	' ? 'selected="selected"' : ''}} >End User Deactive</option>
                                            <option value="EndUserActive" {{$UserData->activestatus == 'EndUserActive' ? 'selected="selected"' : ''}} >End User Active</option>
                                            <option value="TechHelpInfoAdmin" {{$UserData->activestatus == 'TechHelpInfoAdmin' ? 'selected="selected"' : ''}}>Admin</option>
                                            <option value="TechHelpInfoEditor" {{$UserData->activestatus == 'TechHelpInfoEditor' ? 'selected="selected"' : ''}} >Editor</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6 col-lg-6">
                                        <label style="margin-bottom: 0px;" for="activestatus">Partner</label>
                                        @if($errors->has('partner'))<small style="color:red;font-weight: bold;">{{$errors->first('partner')}}</small>@endif
                                        <select id="partner" class="form-control" name="partner">
                                            <option selected disabled>SELECT Partner TYPE</option>/
                                            <option value="no" {{$UserData->partner == 'no' ? 'selected="selected"' : ''}} >NO</option>/
                                            <option value="yes" {{$UserData->partner == 'yes' ? 'selected="selected"' : ''}} >YES</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12 col-lg-12">
                                        <label style="margin-bottom: 0px;" for="address">Address</label>
                                        @if($errors->has('address'))<small style="color:red;font-weight: bold;">{{$errors->first('address')}}</small>@endif
                                        <textarea type="text" class="form-control" value="" id="address" placeholder="Enter Address" name="address" >{{$UserData->address}}</textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Save Data</button>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#customertype').change(function(){
            var $type =  $(this).val();
            if($type=='End User'){
                $('.ifcompany').hide();
            }else{
                $('.ifcompany').show();
            }
        })
    });
</script>
@include('Admin.inc.footersource')