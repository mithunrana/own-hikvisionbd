<div class="pc-title">
    <h4 style="color:#d71920;">Categories</h4>
</div>
<div class="accordion" id="accordionExample2">
    @foreach($Categories as $Category)
        <div class="cat-box">
            <div class="cat-item" id="h1">
                <a style="padding: 16px 6px;border: 0; border-bottom: 1px solid red;" type="button" data-toggle="collapse" data-target="#THI{{$Category->id}}">{{$Category->CategoryName}}<i style="margin-top:3px" class="fa fa-plus"></i></a>
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