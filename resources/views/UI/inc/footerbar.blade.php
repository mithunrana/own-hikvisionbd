<!--start footer area-->
<footer class="clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-map">
                    <p class="footer-item-title">Bangladesh Operations</p>
                    <img width="220" src="{{asset('')}}UI/images/map.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-middle">
                    <div class="fm fm-1">
                        <p class="footer-item-title">Solution</p>
                        <ul>
                            @foreach(App\Solutions::orderBy('id','DESC')->Where('ActiveStatus',1)->get() as $Solution)
                            <li><a href="{{asset('')}}solutions/{{$Solution->Permalink}}">{{$Solution->SolutionsName}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="fm fm-2">
                        <p class="footer-item-title">Support</p>
                        <ul>
                            <li><a href="{{asset('')}}hikvision-support-bangladesh">Download</a></li>
                            <li><a href="{{asset('')}}hikvision-support-bangladesh">Video</a></li>
                        </ul>
                    </div>
                    <div class="fm fm-3">
                        <p class="footer-item-title">Press</p>
                        <ul>
                            <li><a href="{{asset('')}}portfolio">Success History</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </div>
                    <div class="fm fm-5">
                        <p class="footer-item-title">Corporate</p>
                        <ul>
                            @foreach(\App\QuickLiinks::get() as $Links)
                            <li><a href="{{$Links->url}}">{{$Links->name}}</a></li>
                             @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-right">
                    <p class="footer-item-title">#1 ranking in A&S Security 50</p>
                    <p style="margin-bottom: 40px;">Hikvision has achieved Number 1 overall position, being placed at the top of the rankings in A&S Magazines</p>
                    <form action="">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Subscribe to Newsletter">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-danger"><i class="fa fa-envelope"></i></button>
                            </div>

                        </div>
                    </form>
                    <div class="follow-us mt-4">
                        <a style="text-transform: uppercase;font-size: 14px;">Follow Us : </a>
                        @foreach(\App\SocialLinks::get() as $Social)
                        <a target="_blank" href="{{$Social->url}}">{!! html_entity_decode($Social->icon) !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p><a style="color:#fff;text-transform: uppercase;margin-top: 10px; display: inline-block;" href="#">Hikvision Disclaimer : hikvision does not support purchases made through unauthorized channels</a></p>
            </div>
            <div class="col-md-4">
                <div class="download-apps text-center">
                    <a style="text-transform: uppercase;font-size: 14px;color: #fff;" href="javascript:;">Download : </a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.mcu.iVMS"><i class="fa fa-android"></i></a>
                    <a target="_blank" href="https://apps.apple.com/ae/app/hik-connect/id1087803190"><i class="fa fa-apple"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-copy">
                        <p style="margin-bottom: 5px;">2020 HIKVISION Digital Technology Co, Ltd. All Rights Reserved.</p>
                        <a href="#">Legal</a> |
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="designer text-md-right">
                        <p style="margin-bottom: 5px;"><strong>Designed by : <a target="_blank" href="https://facebook.com/imran.emonn">Imran Ahmed</a></strong></p>
                        <p><strong>Developed by : <a target="_blank" href="{{$SiteProfile->DesignerDeveloperDomain}}">{{$SiteProfile->DesignerDeveloperName}}</a></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer area-->