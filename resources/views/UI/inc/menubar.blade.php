<header>
    <!--start header top-->
    <section class="header-top clearfix py-1 wow fadeInDown" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ht-contact">
                        <ul class="ht-ul">
                            <li><a href="javascript:;">Cell: {{$SiteProfile->CorporatePhone}}</a></li>
                            @if(!Auth::check())
                                <li><a style="color: #fff;display: inline-block;" href="{{asset('')}}register">Signup</a></li>
                                <li><a style="color: #fff;display: inline-block;" href="{{asset('')}}login">Login</a></li>
                            @endif
                            @if(Auth::check())
                                <li>
                                    <a style="color: #fff;margin-top: 5px;display: inline-block;text-decoration: none;color:white;" href="{{asset('')}}admin/admin-panel">
                                        {{Auth::user()->name}}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--end header top-->
    <nav class="navbar wow fadeInDown" data-wow-duration="1s">
        <div style="padding-right: 0px;padding-left: 0px;" class="container">
            <a class="navbar-brand" href="{{asset('')}}">
                <img style="max-width: 130px;" src="{{asset('')}}{{$SiteProfile->logo->imageurl}}" class="logo" title="{{$SiteProfile->MainLogoTitleText}}" alt="{{$SiteProfile->MainLogoAltText}}">
            </a>
            <div class="main-nav ml-auto">
                <ul class="nav-ul">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li style="position: relative" class="mega-dd-btn"><a href="{{asset('')}}products">Products <i style="color: #6d6e71;" class="fa fa-angle-down"></i></a>
                        <div class="mega-content">
                            <div class="row">
                                <div class="col">
                                    <ul class="mega-item">
                                        @foreach(\App\ProductsPrimaryCategory::all() as $ProductPrimaryCat)
                                            <li><a href="{{asset('')}}products/{{$ProductPrimaryCat->CategoryUrl}}">{{$ProductPrimaryCat->CategoryName}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mega-dd-btn"><a href="{{asset('')}}solutions">Solutions </a></li>
                    <li class="mega-dd-btn"><a target="_blank" href="https://www.ezvizlife.com/">EZVIZ </a></li>
                    <li class="mega-dd-btn"><a href="{{asset('')}}hikvision-support-bangladesh">Support </a>
                    <li class="mega-dd-btn">
                        <a href="{{asset('')}}contact">Contact </a>
                    </li>
                    <li style="position: relative;" class="mega-dd-btn">
                        <a href="#">Corporate <i style="color: #6d6e71;" class="fa fa-angle-down"></i>
                        </a>
                        <div  class="mega-content">
                            <div class="row">
                                <div class="col">
                                    <ul class="mega-item">
                                        <li><a href="{{asset('')}}portfolio">Success History</a></li>
                                        <li><a href="{{asset('')}}mega-trading">About Tech Help Info</a></li>
                                        <li><a href="{{asset('')}}contact">Contact Us</a></li>
                                        <li><a href="{{asset('')}}career-hikvision">Career</a></li>
                                        <li><a href="{{asset('')}}hikvision-importer-bangladesh">Hikvision Importer In Bangladesh</a></li>
                                        <li><a href="{{asset('')}}hikvision-distributor-bangladesh">Hikvision Distributor In Bangladesh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><i class="fa fa-search web-search"></i>
                        <div class="search-mega-content search-item">
                             <div style="margin-right:0px;margin-left:0px;" class="row">
                                <div class="col">
                                    <form action="{{url('/search')}}" method="Post">
                                        @csrf
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="keyword" placeholder="What are you looking for?">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-danger">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="icon-div">
                <ul>
                    <li>
                        <i class="fa fa-search web-search"></i>
                        <div class="search-mega-content search-item">
                            <div style="margin-right:0px;margin-left:0px;" class="row">
                                <div class="col">
                                    <form action="">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="What are you looking for?">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-danger">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--end header-->






<!--start mobile menu-->
<div style="overflow-y:scroll;" class="mobile-menu">
    <div class="mm-logo" style="background: #fff;padding: 15px;">
        <a style="text-align:center;margin-bottom: 0px;color:white;" >
            <img style="max-width: 70%;" src="{{asset('')}}{{$SiteProfile->logo->imageurl}}">
        </a>
        <div style="margin:-9px 0px;" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion" id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}">Home</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingTwo">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseTwo">Products<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseTwo" class="collapse menu-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            @foreach(\App\ProductsPrimaryCategory::all() as $ProductPrimaryCat)
                                <li><a href="{{asset('')}}products/{{$ProductPrimaryCat->CategoryUrl}}">{{$ProductPrimaryCat->CategoryName}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingTwo">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapse3">Solutions<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapse3" class="collapse menu-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            @foreach(App\Solutions::orderBy('id','DESC')->Where('ActiveStatus',1)->get() as $Solution)
                                <li><a href="{{asset('')}}solutions/{{$Solution->Permalink}}">{{$Solution->SolutionsName}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a target="_blank" href="https://www.ezvizlife.com/" class="mmenu-btn" >EZVIZ</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a href="{{asset('')}}hikvision-support-bangladesh" class="mmenu-btn" >Support</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a href="{{asset('')}}news" class="mmenu-btn" >News</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingThree">
                    <a href="{{asset('')}}contact" class="mmenu-btn" >Contact</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link" id="headingEight">
                    <a class="mmenu-btn" type="button" data-toggle="collapse" data-target="#collapseEight">Corporate<i class="fa fa-plus"></i></a>
                </div>
                <div id="collapseEight" class="collapse menu-body" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="{{asset('')}}portfolio">Success History</a></li>
                            <li><a href="{{asset('')}}mega-trading">About Mega Trading</a></li>
                            <li><a href="{{asset('')}}contact">Contact Us</a></li>
                            <li><a href="{{asset('')}}career-hikvision">Career</a></li>
                            <li><a href="{{asset('')}}hikvision-importer-bangladesh">Hikvision Importer BD</a></li>
                            <li><a href="{{asset('')}}hikvision-distributor-bangladesh">Hikvision Distributor BD</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end mobile menu-->
