@php
    $SiteProfile = App\SiteProfile::first();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('')}}admin/admin-panel" class="brand-link">
        <img src="{{asset('Admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">
            @if(!empty($SiteProfile))
                {{$SiteProfile->SiteName}}
            @endif
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('Admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{asset('')}}user-panel" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview menu-open">
                    <a STYLE="background-color: #d40707;" href="{{url('admin/userdata-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            USER DATA
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a STYLE="background-color: #d40707;" href="{{url('admin/customer-mail-send')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Mail Marketing
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/portfolio-manage')}}" class="nav-link">
                        <i class="fa fa-graduation-cap"></i>
                        <p>PORTFOLIO
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\Portfolio::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/solutions-manage')}}" class="nav-link">
                        <i class="fa fa-graduation-cap"></i>
                        <p>Solutions
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\Solutions::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/eventsmanage')}}" class="nav-link">
                        <i class="fa fa-handshake" style="font-size:18px"></i>
                        <p>Events
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\Events::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/authorised-manage')}}" class="nav-link">
                        <i class="fa fa-graduation-cap"></i>
                        <p>Certification
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\AuthorizationCertificate::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/training-manage')}}" class="nav-link">
                        <i class="fa fa-edit"></i>
                        <p>Training
                            <span class="right badge badge-success">
                              @php
                                  echo count(App\Training::all());
                              @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/news-manage')}}" class="nav-link">
                        <i class="fa fa-newspaper" style="font-size:18px"></i>
                        <p>News
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\News::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('admin/software-manage')}}" class="nav-link">
                        <i class="fa fa-cog" ></i>
                        <p>Software
                            <span class="right badge badge-success">
                               @php
                                   echo count(App\SoftwareList::all());
                               @endphp
                            </span>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            BLOGS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/blog-manage')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <span class="right badge badge-danger">
                                   @php
                                       echo count(App\BlogTutorial::all());
                                   @endphp
                                </span>
                                <p>Blog Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/blog-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin/products-manage')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Products Manage</p>
                                <span class="right badge badge-success">
                               @php
                                   echo count(App\Products::all());
                               @endphp
                            </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/products-brand')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Products Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/cctv-brand')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CCTV Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/products-primary-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Primary Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/products-secondary-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Secondary Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/discoverproducts')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Discover Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/cctvmegapixel')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mega Pixel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/price-list-manage')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Price List</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            SETTING
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('')}}admin/electroporno-slider-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/quicklinks')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quick Links</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/sociallinks')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Social Links</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/topic')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Website Topic</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/siteprofile')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
