@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Hikvision Importer In Bangladesh | CCTV NVR DVR ACCESS CONTROL";
@endphp

@include('UI.inc.headersource')

<!--start header-->
@include('UI.inc.menubar')
<!--End Header-->


<section class="brrr bg-light wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <ol style="background: transparent;" class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">Home</a></li>
                    <li class="breadcrumb-item active">Importer</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--start page header area-->
<section class="success-history-header clearfix wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="sh-header-img">
                    <h3 class="mb-4" style="color: #555;">we are the most hikvision products importer in bangladesh. all hikvision products</h3>
                    <p style="color: #555;">we import hikvision NVR, DVR, Access Control, Network Camera, Analog Camera, Network Video Recorder, Network PTZ Camera, TurboHD Analog Camera - 720p, TurboHD Analog Camera - 1080p, TurboHD Analog PTZ Camera - 1080p, Analog Camera PICADIS - 720TVL/960H, Digital Video Recorder, Keyboards, Accessories, Encoders and Decoders. We Import Hikvision Products From <a target="_blank" class="text-custom" href="https://www.hikvision.com/en/">Hikvision US</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end page header area-->

<!--start importer area-->
<section class="importer-area clearfix pb-3 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="text-align: center; margin: 20px 0; margin-top: 40px; font-size: 32px; font-weight: 400;">Hikvision Importer In Bangladesh</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-custom" style="">We Import In This Category Products</p>
            </div>
        </div>
        <div class="row">
            <!--col-md-4-->
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/ptz-camera.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">PTZ Camera</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">Hikvision Providing Security and Confidence Tools for South African Campus</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/network-camera.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">Hikvision Network Camera</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">Hikvision Providing Security and Confidence Tools for South African Campus</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/network-video-recorder.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">Network Video Recorder(NVR)</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">Hikvision Helps Steehold to Deliver TOTAL Security for West Africa’s Leading oil & Gas Company</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            <div class="col-md-4 wow  fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/analog-camera.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">Analog Camera</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">Hikvision Network Mobile DVR Secures Armored Truck of China Merchants Bank</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/digital-video-recorder.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">Digital Video Recorder(DVR)</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">World-Class Abu Dhabi Facility Rides Hikvision Technological Knowhow</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>
            <!--col-md-4-->
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <div style="border-radius: 0;" class="sh-box">
                    <div class="sh-img">
                        <a href="#">
                            <img src="{{asset('')}}UI/images/access-control-hikvision.jpg" class="img-fluid" alt="image">
                            <h4 class="text-custom">Hikvision Access Control</h4>
                        </a>
                    </div>

                    <div class="sh-txt">
                        <p style="font-size: 14px; margin-top: 20px; margin-bottom: 5px;">An eye on the birds: Agri-CCTV delivers unique Hikvision Wi-Fi surveillance system to poultry farm</p>
                        <a class="text-custom" href="#">Learn More →</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col wow fadeInDown">
                <p class="text-custom" style="">Our Imports Products List</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Network Camera</th>
                            <th>Analog Camera</th>
                            <th>Network Video Recorder</th>
                            <th>Digital Video Recorder</th>
                            <th>ACCessoRies</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DS-2CD4024F-A</td>
                            <td>DS-2CE55C2N&nbsp;</td>
                            <td>DS-7708NI-SP</td>
                            <td>DS-7204HGHI-SH/A</td>
                            <td>DS-1259ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4025FWD-A</td>
                            <td>DS-2CE55C2N-IRM&nbsp;</td>
                            <td>DS-7716NI-SP</td>
                            <td>DS-7208HGHI-SH/A</td>
                            <td>DS-1258ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4032FWD-A</td>
                            <td>DS-2CE56C2N-IT3</td>
                            <td>DS-7732NI-SP</td>
                            <td>DS-7216HGHI-SH/A</td>
                            <td>DS-1272ZJ-110</td>
                        </tr>
                        <tr>
                            <td>DS-2CD6026FHWD-A</td>
                            <td>DS-2CE55C2N-VFIR3</td>
                            <td>DS-7716NI-ST</td>
                            <td>DS-7308HQHI-SH&nbsp;</td>
                            <td>DS-1272ZJ-110B</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4035FWD-A</td>
                            <td>DS-2CE15C2N-IR</td>
                            <td>DS-7732NI-ST</td>
                            <td>DS-7316HQHI-SH&nbsp;</td>
                            <td>DS-1214ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4065F-AP</td>
                            <td> DS-2CE16C2N-IT3</td>
                            <td>DS-7732NI-E4</td>
                            <td></td>
                            <td>DS-1215ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4124FWD-IZ</td>
                            <td>DS-2CE15C2N-VFIR3</td>
                            <td>DS-9632NI-ST</td>
                            <td></td>
                            <td>DS-1260ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4125FWD-IZ</td>
                            <td>DS-2CE16C2T-IR</td>
                            <td>Network Camera Smart Series</td>
                            <td></td>
                            <td>DS-1273ZJ-135B</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4126FWD-IZ(M)</td>
                            <td>DS-2CE56C2T-IRM</td>
                            <td>DS-2CD4312F-IZS&nbsp;</td>
                            <td></td>
                            <td>DS-1273ZJ-135</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4132FWD-IZ(M)</td>
                            <td>DS-2CE56C5T-VFIT3</td>
                            <td>DS-2CD4312F-IZHS</td>
                            <td></td>
                            <td>DS-1260ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4135F-IZ</td>
                            <td>DS-2CE16C5T-AVFIR3</td>
                            <td>DS-2CD4312FWD-IZS&nbsp;</td>
                            <td></td>
                            <td>DS-1273ZJ-130</td>
                        </tr>

                        <tr>
                            <td>DS-2CD4312F-IZS</td>
                            <td>DS-2CE56C5T-AVPIR3</td>
                            <td>DS-2CD4324F-IZ</td>
                            <td></td>
                            <td>DS-1273ZJ-130B</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4312F-IZHS</td>
                            <td>DS-2AE5230T-A</td>
                            <td>DS-2CD4332FWD-IZS&nbsp;</td>
                            <td></td>
                            <td>DS-1271ZJ-130</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4312FWD-IZS</td>
                            <td>DS-2AE5123TI-A</td>
                            <td>DS-2CD4525FWD-IZH&nbsp;</td>
                            <td></td>
                            <td>DS-1227ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4324F-IZS&nbsp;</td>
                            <td>DS-2AE7230TI-A</td>
                            <td>DS-2CD4525FWD-IZH</td>
                            <td></td>
                            <td>DS-1275ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4332FWD-IZS</td>
                            <td></td>
                            <td>DS-2CD4526FWD-IZH&nbsp;</td>
                            <td></td>
                            <td>DS-1276ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4525FWD-IZH</td>
                            <td></td>
                            <td>DS-2CD4535F-IZH&nbsp;</td>
                            <td></td>
                            <td>DS-1271ZJ-DM25</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4525FWD-IZH</td>
                            <td></td>
                            <td>DS-2CD4212F-IZS</td>
                            <td></td>
                            <td>DS-1281ZJ-DM25</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4526FWD-IZH</td>
                            <td></td>
                            <td>DS-2CD4212FWD-IZS</td>
                            <td></td>
                            <td>DS-1280ZJ-DM25</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4535F-IZH</td>
                            <td></td>
                            <td>DS-2CD4224F-IZS</td>
                            <td></td>
                            <td>DS-1275ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4212F-IZS</td>
                            <td></td>
                            <td>DS-2CD4232FWD-IZS</td>
                            <td></td>
                            <td>DS-1602ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4212FWD-IZS</td>
                            <td></td>
                            <td>DS-2CD4A20F-IZS</td>
                            <td></td>
                            <td>DS-1602ZJ-pole</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4224F-IZS</td>
                            <td></td>
                            <td>DS-2CD4A25FWD-IZHS</td>
                            <td></td>
                            <td>DS-1661ZJ</td>
                        </tr>
                        <tr>
                            <td>DS-2CD4232FWD-IZ</td>
                            <td></td>
                            <td>DS-2CD4A25FWD-IZHS</td>
                            <td></td>
                            <td>DS-1618ZJ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-gray text-center mt-3 wow fadeInDown" data-wow-duration="1s"><a target="_blank" class="text-custom" href="http://www.hikvision.com.bd/mega-trading">Mega Trading Ltd.</a> could be a leading <a target="_blank" class="text-custom" href="http://www.biid.org.bd/">ICT company in Bangladesh</a> that has established a powerful foothold during this competitive market. Since its beginning within the year 2007, the corporate has been making an attempt within the most pragmatic manner to achieve bent the lots across the country with excellence in product and services. Having a good vary of product from world- known brands, the corporate emphasizes on providing customers with prompt, effective and ground-breaking product & services that's particularly designed for them. Having influential person in product and services radio-controlled by innovation all told spheres, surpass Technologies Ltd. has already emerged as a high five revered company within the ICT business of Bangladesh. the corporate guarantees to uphold its high ideals, values, integrity and honesty to serve the state ceaselessly.</p>
            </div>
        </div>
    </div>
</section>
<!--end importer area-->


@include('UI.inc.footerbar')


<!--Social icon-->
@include('UI.inc.sidebarsocialnumber')
<!--Social icon-->

@include('UI.inc.footersource')

</body>
</html>
