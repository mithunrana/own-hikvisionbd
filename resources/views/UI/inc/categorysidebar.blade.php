
<div class="pc-title">
    <h4 style="color:#d71920;">Brand</h4>
</div>
<div class="accordion" id="accordionExample2">
    @foreach(\App\ProductsBrand::all() as $Brand)
        <div class="cat-box">
            <div class="cat-item" id="h1">
                <a href="{{asset('')}}brand/{{$Brand->BrandUrl}}" style="border: 0;" >{{$Brand->BrandName}}</a>
            </div>
        </div>
    @endforeach
</div>


<div class="pc-title">
    <h4 style="color:#d71920;">Categories</h4>
</div>
<div class="accordion" id="accordionExample2">
    @foreach($Categories as $Category)
        <div class="cat-box">
            <div class="cat-item" id="h1">
                <a style="border: 0;" type="button" data-toggle="collapse" data-target="#THI{{$Category->id}}">{{$Category->CategoryName}}<i class="fa fa-plus"></i></a>
            </div>
            <div id="THI{{$Category->id}}" class="collapse cat-body" aria-labelledby="h1" data-parent="#accordionExample2">
                <div class="card-body">
                    <ul>
                        @foreach($Category->SecondaryCategory as $SecondaryCategory)
                            <li><a href="{{asset('')}}category/{{$SecondaryCategory->CategoryUrl}}">{{$SecondaryCategory->CategoryName}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>