<div class="choose-us-content">
    <div class="choose-us-wrap">
        @foreach($items as $item)
            <div class="choose-us-item wow fadeInUp" data-wow-delay=".5s">
                <div class="choose-us-icon">
                    <div class="icon">
                        <img src="{{ renderImage($item->galleryCover(), 60, 60, 'cover') }}" style="height: 60px; object-fit: cover" />
                    </div>
                    <div class="text">
                        <h2>01</h2>
                    </div>
                </div>
                <div class="content">
                    <h5>{{$item->title}}</h5>
                    {!! $item->text !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
