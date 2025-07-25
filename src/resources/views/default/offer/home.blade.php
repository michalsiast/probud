<div class="row">
    @foreach($items->take(3) as $item)
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="news-card-items">
                <div class="news-image">
                    <img src="{{ renderImage($item->galleryCover(), 900, 345, 'cover') }}" style="width: 100%;height: 345px;object-fit: cover" alt="img">
                </div>
                <div class="news-content">
                    <h4>
                        <a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a>
                    </h4>
                    {!! $item->lead !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
