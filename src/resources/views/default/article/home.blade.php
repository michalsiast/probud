<div class="row">
    @foreach($items as $item)
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
            <div class="service-card-items-3">
                <div class="icon">
                    <img src="{{ renderImage($item->galleryCover(), 60, 60, 'cover') }}" style="height: 60px; object-fit: cover" />
                </div>
                <div class="service-content">
                    <h5>{{$item->title}}</h5>
                    {!! $item->lead !!}
                </div>
            </div>
        </div>
  @endforeach
</div>
