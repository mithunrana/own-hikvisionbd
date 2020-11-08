
@php
    $title = "Register";
    $keywords =  "hikvision, bangladesh, register, signup";
    $description =  "Hikvision Bangladesh Website Registration Here";
@endphp

@include('UI.inc.headersource')
@include('UI.inc.menubar')


<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div style="margin: 0 auto;width: 100%" class="col-12 col-sm-12 col-md-10 col-lg-10">
            <div style="box-shadow: 1px 1px 7px 1px #787878;" class="card">
                <div style="color:red;font-weight: bold" class="card-header">Registration Here</div>
                <div class="card-body">
                     <form action="{{url('admin/userregister')}}" method="POST">
                         @csrf
                         <div class="row">
                             @if(Session::has('message'))
                                 <div class="alert alert-success alert-dismissible">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                     {{Session::get('message')}}
                                 </div>
                             @endif
                             <div class="form-group col-lg-4">
                                 <label style="margin-bottom: 0px;" for="name">Name</label>
                                 @if($errors->has('name'))<small style="color:red;font-weight: bold;">{{$errors->first('name')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('name')}}" id="name"  name="name">
                             </div>
                             <div class="form-group col-6 col-lg-4">
                                 <label style="margin-bottom: 0px;" for="username">User Name</label>
                                 @if($errors->has('username'))<small style="color:red;font-weight: bold;">{{$errors->first('username')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('username')}}" id="username" name="username" >
                             </div>
                             <div class="form-group col-6  col-lg-4">
                                 <label style="margin-bottom: 0px;" for="phone">Phone</label>
                                 @if($errors->has('phone'))<small style="color:red;font-weight: bold;">{{$errors->first('phone')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('phone')}}" id="phone" name="phone" >
                             </div>
                         </div>


                         <div class="row">
                             <div class="form-group col-lg-4">
                                 <label style="margin-bottom: 0px;" for="email">Email</label>
                                 @if($errors->has('email'))<small style="color:red;font-weight: bold;">{{$errors->first('email')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('email')}}" id="email"  name="email" >
                             </div>
                             <div class="form-group col-6 col-lg-4">
                                 <label style="margin-bottom: 0px;" for="password">Password</label>
                                 @if($errors->has('password'))<small style="color:red;font-weight: bold;">{{$errors->first('password')}}</small>@endif
                                 <input type="password" class="input-field-design" value="" id="password" name="password" >
                             </div>
                             <div class="form-group col-6 col-lg-4">
                                 <label style="margin-bottom: 0px;" for="password-confirm" >Retype Password</label>
                                 <input type="password" class="input-field-design" value="" id="password-confirm" name="password_confirmation" >
                             </div>
                         </div>

                         <div class="row">
                             <div class="form-group col-6 col-lg-6">
                                 <label style="margin-bottom: 0px;" for="customertype">Customer Type</label>
                                 @if($errors->has('customertype'))<small style="color:red;font-weight: bold;">{{$errors->first('customertype')}}</small>@endif
                                 <select id="customertype" class="input-field-design" name="customertype">
                                     <option selected disabled>SELECT CUSTOMER TYPE</option>
                                     <option value="End User" {{ old('customertype') == 'End User' ? 'selected' : '' }}>End User</option>
                                     <option value="Retailer" {{ old('customertype') == 'Retailer' ? 'selected' : '' }}>Retailer</option>
                                     <option value="Corporate" {{ old('customertype') == 'Corporate' ? 'selected' : '' }}>Corporate</option>
                                 </select>
                             </div>
                             <div class="form-group col-6 col-lg-6 ifcompany">
                                 <label style="margin-bottom: 0px;" for="companyname">Company Name</label>
                                 @if($errors->has('companyname'))<small style="color:red;font-weight: bold;">{{$errors->first('companyname')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('companyname')}}" id="companyname" name="companyname" >
                             </div>
                             <div class="form-group col-6 col-lg-6 ifcompany">
                                 <label style="margin-bottom: 0px;" for="servicetype">SERVICE TYPE</label>
                                 @if($errors->has('servicetype'))<small style="color:red;font-weight: bold;">{{$errors->first('servicetype')}}</small>@endif
                                 <select id="servicetype" class="input-field-design" name="servicetype">
                                     <option selected disabled>SELECT SERVICE TYPE</option>
                                     <option value="itservice" {{ old('servicetype') == 'itservice' ? 'selected' : '' }}>IT Service</option>
                                     <option value="softwareservice" {{ old('servicetype') == 'softwareservice' ? 'selected' : '' }}>Software Service</option>
                                     <option value="consultancyservice" {{ old('servicetype') == 'consultancyservice' ? 'selected' : '' }}>Consultancy Service</option>
                                 </select>
                             </div>
                             <div class="form-group col-6 col-lg-6">
                                 <label style="margin-bottom: 0px;" for="country">Country</label>
                                 @if($errors->has('country'))<small style="color:red;font-weight: bold;">{{$errors->first('country')}}</small>@endif
                                 <input type="text" class="input-field-design" value="{{old('country')}}" id="country" name="country" >
                             </div>
                         </div>

                         <div class="row">
                             <div class="form-group col-12 col-lg-12">
                                 <label style="margin-bottom: 0px;" for="address">Address</label>
                                 @if($errors->has('address'))<small style="color:red;font-weight: bold;">{{$errors->first('address')}}</small>@endif
                                 <textarea type="text" class="input-field-design" value="" id="address" name="address" >{{old('address')}}</textarea>
                             </div>
                         </div>
                         <button style="background-color: #d71920" type="submit" class="btn btn-danger">Register</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('UI.inc.footerbar')
@include('UI.inc.footersource')
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
</body>
</html>