@php
    $SiteProfile = App\SiteProfile::first();
@endphp
@php
    $title = "About Us";
    $keywords =  "about us, tech help info contact number, tech help info office address, tech help info mobile number, tech help info address, address, software company BD, software company bangladesh,
    software company bangladesh contact number, about tech help info";
    $description =  "About Tech Help Info, Tech Help Info Best Software Company In Bangladesh, Provide, CCTV, SOFTWARE, NEWS, JOBS";
@endphp

@include('UI.inc.headersource')
@include('UI.inc.menubar')

<div class="container-fluid">
    <nav style="margin-top: 10px;border-bottom: 0px;" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
        </ol>
    </nav>
</div>


<div class="container">
    <div style="padding: 20px" class="terms-box">
        <div class="row">
            <div style="" class="col-12 col-sm-4 col-lg-3 col-md-4">
                <ul style="list-style: none;" class="list-group">
                    <li style="color:#6D6E71;border-bottom: 1px solid grey;" class="">Corporate</li>
                </ul>
                <ul style="list-style-type: none;" class="m-0 p-0">
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}hikvision-importer-bangladesh">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Hikvision Importer In Bangladesh</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}hikvision-distributor-bangladesh">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Hikvision Distributor In Bangladesh</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}contact">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Contact</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}portfolio">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Success History</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}solutions">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Solution</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}tech-help-info">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">About Tech Help Info</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div style="" class="col-12 col-sm-4 col-lg-3 col-md-4">
                <ul style="list-style: none;" class="list-group">
                    <li style="color:#6D6E71;border-bottom: 1px solid grey;" class="">Support</li>
                </ul>
                <ul style="list-style-type: none;" class="m-0 p-0">
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}hikvision-support-bangladesh">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Download</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}hikvision-support-bangladesh">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Video</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div style="" class="col-12 col-sm-4 col-lg-3 col-md-4">
                <ul style="list-style: none;" class="list-group">
                    <li style="color:#6D6E71;border-bottom: 1px solid grey;" class="">Solution</li>
                </ul>
                <ul style="list-style-type: none;" class="m-0 p-0">
                    @foreach(\App\Solutions::get() as $Solution)
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}solutions/{{$Solution->Permalink}}">
                                <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">{{$Solution->SolutionsName}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div style="" class="col-12 col-sm-4 col-lg-3 col-md-4">
                <ul style="list-style: none;" class="list-group">
                    <li style="color:#6D6E71;border-bottom: 1px solid grey;" class="">Privacy Policy</li>
                </ul>
                <ul style="list-style-type: none;" class="m-0 p-0">
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}privacy-policy">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Privacy & Policy</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}general-terms-of-use">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">General Terms Of Use</span>
                        </a>
                    </li>
                    <li>
                        <a style="font-size:14px;" href="{{asset('')}}sitemap">
                            <span style="color: #dc3545;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Sitemap</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h4 style="border-bottom: 1px solid grey;">Products</h4>
    <div class="row">
        @foreach(\App\ProductsPrimaryCategory::get() as $Category)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <h5>
                <a style="color:black" href="{{asset('')}}products/{{$Category->CategoryUrl}}">{{$Category->CategoryName}}</a>
            </h5>
            @foreach($Category->SecondaryCategory as $Products)
                <h6>
                    <a style="font-weight: bold;color:#6d6e71;" style="color:#d71920" href="{{asset('')}}category/{{$Products->CategoryUrl}}">{{$Products->CategoryName}}</a>
                </h6>
                @foreach($Products->Products as $EachProduct)
                    <p><a style="color:#d71920" href="{{asset('')}}{{$EachProduct->Permalink}}">{{$EachProduct->Model}}</a></p>
                @endforeach
            @endforeach
        </div>
        @endforeach
    </div>
</div>

@include('UI.inc.footerbar')
@include('UI.inc.footersource')
</body>
</html>