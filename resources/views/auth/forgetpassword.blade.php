@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--end header -->

<!--start login form area-->
<section class="login-form-area clearfix py-5 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="login-width">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-img">

                    </div>
                </div>
                <div class="col-md-6">
                    @if(Session::has('message'))
                        <div style="background-color: #ce0909;color:white;font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="login-main-form">
                        <div class="log" style="padding: 40px 10px;padding-left: 0;padding-right: 15px;">
                            <h5 class="mb-4" style="font-size: 22px;">Forget Password</h5>
                            <form method="POST" action="{{ url('password/email') }}">
                                @csrf
                                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="btn btn-danger btn-block" type="submit" value="Submit">
                                <div class="register-now mt-4">
                                    <label style="font-size: 15px;"><strong>Don't have an account? Register Now</strong></label>
                                    <a class="btn btn-danger btn-block" href="{{asset('')}}register">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end login form area-->


@include('UI.inc.footerbar')
@include('UI.inc.sidebaricon')

@include('UI.inc.footersource')
</body>
</html>
