
@php
    $title = Auth::user()->name. "Hikvision Bangladesh";
    $keywords =  "hikvision bangladesh";
    $description =  "user panel";
@endphp

@include('UI.inc.headersource')
@include('UI.inc.menubar')


<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div style="margin: 0 auto;width: 100%;background-color:#232244;padding-bottom: 20px;border:1px solid black;" class="col-12 col-sm-12 col-md-4 col-lg-4">
            <form action="{{url('user-panel-image-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">
                        <input type="file" name="userimage" id="image" style="display:none;"/>
                        <img style="margin-top: 20px;cursor:pointer;" id="preview" class="img-thumbnail" @if(Auth::user()->image != "") src="{{asset('')}}{{Auth::user()->image}}" @endif src="{{asset('')}}picture/user-default-image.png" >
                    </label>
                </div>
                <div class="form-group">
                <input id="imagesave" style="width: 100%;display: none;" type="submit" value="Save Image" class="btn btn-danger">
                </div>
            </form>
            <h4 style="margin-top: 7px;margin-bottom: 7px;color:white;">{{Auth::user()->name}}</h4>
            <ul style="margin-top:0px;" class="list-group list-group-flush">
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="{{asset('')}}user-panel">{{Auth::user()->username}}</a>
                </li>
                <li class="list-group-item">
                    <a id="accountinfo" style="text-decoration: none;" href="{{asset('')}}user-panel">My Account</a>
                </li>
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="#">My Orders</a>
                </li>
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="{{asset('')}}user-panel-pass-edit">Change Password</a>
                </li>
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="{{asset('')}}user-panel-info-edit">Account Setting</a>
                </li>
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="{{asset('')}}contact">Support</a>
                </li>
                @if(Auth::check() && Auth::user()->activestatus=='TechHelpInfoAdmin')
                    <li class="list-group-item">
                        <a style="text-decoration: none;" href="{{asset('')}}admin/admin-panel">Admin Panel</a>
                    </li>
                 @endif
                <li class="list-group-item">
                    <a style="text-decoration: none;" href="{{url('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
        <div id="mainbox" style="padding-top:20px;background-color:rgba(189, 189, 189, 0.3);" class="col-12 col-sm-10 col-md-8 col-lg-8">
                @if(Session::has('message'))
                <div style="font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{Session::get('message')}}
                </div>
                @endif

                @if($errors->has('userimage'))
                <div style="font-weight: bold;width: 100%;" class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{$errors->first('userimage')}}
                </div>
                @endif

                <fieldset style="border: 1px solid #e60000; padding: 10px;z-index: 10;margin-bottom:8px;">
                    <legend style="max-width: 100%;"> My Account</legend>
                    <div class="a-justify">
                        Hello, <b>{{Auth::user()->name}}</b>
                        <br><br>
                        From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit
                        information.
                    </div>
                </fieldset>
                <form  method="post">
                    @if($errors->has('image'))<small style="color:red;font-weight: bold;">{{$errors->first('image')}}</small>@endif
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username :</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{Auth::user()->username}}" readonly class="form-control" id="staticEmail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" readonly value="{{Auth::user()->name}}"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" readonly value="{{Auth::user()->phone}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Eamail : </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" readonly value="{{Auth::user()->email}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Country : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" readonly value="{{Auth::user()->country}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Address : </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="width: 100%;" readonly placeholder="Enter Your Address">{{Auth::user()->address}}</textarea>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@include('UI.inc.footerbar')
@include('UI.inc.footersource')
<script>
    $(document).ready(function(){
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                $('#imagesave').show();
            }
        }
        $("#image").change(function(){
            readURL(this);
        });
    });
</script>
</body>
</html>
